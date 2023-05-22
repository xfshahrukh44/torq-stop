<?php

use App\Models\Setting;
use App\ProductCategoryField;
use Illuminate\Support\Facades\Mail;
use Webkul\Category\Models\Category;

function get_stripe_secret_key ()
{
    if (!$setting = Setting::find(1)) {
        return false;
    }

    if ($setting->is_test_mode) {
        return $setting->stripe_test_secret_key;
    }

    return $setting->stripe_live_secret_key;
}

function get_stripe_publishable_key ()
{
    if (!$setting = Setting::find(1)) {
        return false;
    }

    if ($setting->is_test_mode) {
        return $setting->stripe_test_publishable_key;
    }

    return $setting->stripe_test_publishable_key;
}

function get_cart_count () {
    if (!Auth::check()) {
        return 0;
    }

    $cart = Cart::where([
        'customer_id' => auth()->guard()->user()->id,
    ])->orderBy('created_at', 'DESC')->first();

    if (!$cart) {
        return 0;
    }

    return $cart->items->count();
}

function sanitize_product_category_fields ()
{
    foreach (ProductCategoryField::where('field_value', 'LIKE', '%"%')->get() as $item) {
        $item->field_value = str_replace('"', "''", $item->field_value);
        $item->save();
    }

    foreach (ProductCategoryField::where('field_name', 'LIKE', '%"%')->get() as $item) {
        $item->field_name = str_replace('"', "''", $item->field_name);
        $item->save();
    }

    dd('Sanitized!');
}

function addCustomFieldToCategory ($cat_slug, $custom_field_title, $custom_field_name, $custom_field_type, $custom_field_is_required, $custom_field_selection_option)
{
    $category = Category::whereHas('cat_flat', function ($q) use ($cat_slug) {
        return $q->where('name', 'LIKE', '%'.$cat_slug.'%');
    })->where('custom_fields', '!=', '[]')->first();

    if (!$category) {
        return false;
    }

    $custom_fields = json_decode($category->custom_fields);

    $custom_fields []= [
        'title' => $custom_field_title,
        'name' => $custom_field_name,
        'type' => $custom_field_type,
        'selection_options' => $custom_field_selection_option,
        'is_required' => $custom_field_is_required,
    ];

    $category->custom_fields = json_encode($custom_fields);
    $category->save();

    return true;
}

function send_mail($from, $to, $subject, $html) {
    // To send HTML mail, the Content-type header must be set
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Create email headers
    $headers .= 'From: ' . $from . "\r\n" .
        'Reply-To: ' . $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Compose a simple HTML email message
    $message = $html;

    // Sending email
    Mail::send([], [], function ($message) use ($to, $subject, $html) {
        $message->from('no-reply@torqstop.com')->to($to)
            ->subject($subject)
            ->setBody($html, 'text/html'); // for HTML rich messages
    });

    if (Mail::failures()) {
        return false;
    }

    return true;

    // Sending email
    if (mail($to, $subject, $message, $headers)) {
        return true;
    } else {
        return false;
    }

    function generateRandomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function get_payment_keys() {
        $setting = Setting::findOrFail(1);
        return [
            "secret_key" => $setting->stripe_env == 'Testing' ? $setting->stripe_testing_secret_key : $setting->stripe_secret_key,
            "publishable_key" => $setting->stripe_env == 'Testing' ? $setting->stripe_testing_publishable_key : $setting->stripe_publishable_key,
        ];
    }

    function get_tax_value($total) {
        $settings = Setting::find(1);
        $tax_rate = $settings->tax_rate;

        return floatval(str_replace(',', '', $total)) * (floatval($tax_rate) / 100);
    }
}
<?php

use App\ProductCategoryField;
use Webkul\Category\Models\Category;

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
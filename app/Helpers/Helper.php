<?php

use App\ProductCategoryField;

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
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public $fillable = [
        'stripe_test_publishable_key',
        'stripe_test_secret_key',
        'stripe_live_publishable_key',
        'stripe_live_secret_key',
        'is_test_mode',
        'paypal_client_id',
        'paypal_secret_key',
        'paypal_is_test_mode',
    ];
}

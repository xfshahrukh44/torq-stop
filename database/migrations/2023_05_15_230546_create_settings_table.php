<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->longText('stripe_test_publishable_key')->nullable();
            $table->longText('stripe_test_secret_key')->nullable();
            $table->longText('stripe_live_publishable_key')->nullable();
            $table->longText('stripe_live_secret_key')->nullable();
            $table->boolean('is_test_mode')->default(true);


            $table->longText('paypal_client_id')->nullable();
            $table->longText('paypal_secret_key')->nullable();
            $table->boolean('paypal_is_test_mode')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}

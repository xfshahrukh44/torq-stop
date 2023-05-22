<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::truncate();

        Setting::create([
            'stripe_test_publishable_key' => 'pk_test_0rY5rGJ7GN1xEhCB40mAcWjg',
            'stripe_test_secret_key' => 'sk_test_lUp78O7PgN08WC9UgNRhOCnr',
            'stripe_live_publishable_key' => '',
            'stripe_live_secret_key' => '',
            'paypal_client_id' => 'AQsOIcos3IlR_nj_XX8DqqOD4f1RTA1EssAauXpc-SIt8OkpAdlF1uojrW99dprmUsM5k5vZBpiiO64x',
            'paypal_secret_key' => 'EH2mWYKo12SFfuvYCh-SehGexumnzHCijQ1Bg59FWFBeUIJtgU-BPRBzTHVPg6l-1ctEvDbJDZo3ksWk',
        ]);
    }
}

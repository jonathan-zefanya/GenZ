<?php

namespace Database\Seeders;


use Dipokhalder\EnvEditor\EnvEditor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Smartisan\Settings\Facades\Settings;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::group('company')->set([
            'company_name'         => 'GenZ - PWA eCommerce CMS with POS & WhatsApp Ordering | Inventory Management',
            'company_email'        => 'admin@genz.com',
            'company_calling_code' => '+62',
            'company_phone'        => '83812345678',
            'company_website'      => 'https://genz.com',
            'company_city'         => 'Tangerang Selatan',
            'company_state'        => 'Banten',
            'company_country_code' => 'IDN',
            'company_zip_code'     => '15310',
            'company_latitude'     => '-6.302444',
            'company_longitude'    => '106.739417',
            'company_address'      => 'House : 25, Road No: 2, Block A, Bintaro Jaya, Tangerang Selatan'
        ]);

        $envService = new EnvEditor();
        $envService->addData([
            'APP_NAME' => "GenZ - PWA eCommerce CMS with POS & WhatsApp Ordering | Inventory Management"
        ]);
        Artisan::call('optimize:clear');
    }
}

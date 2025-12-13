<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\Outlet;
use Illuminate\Database\Seeder;
use Dipokhalder\EnvEditor\EnvEditor;

class OutletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $envService = new EnvEditor();
        if ($envService->getValue('DEMO')) {
            Outlet::insert([
                [
                    'name'         => 'Padang 1',
                    'email'        => 'padangoutlet@example.com',
                    'country_code' => '+62',
                    'phone'        => '1325736364',
                    'latitude'     => '0.9500',
                    'longitude'    => '100.3500',
                    'city'         => "Padang",
                    'state'        => "Sumatera Barat",
                    'zip_code'     => "1216",
                    'address'      => 'House :31, Road: 9, Block: A, Padang',
                    'status'       => Status::ACTIVE,
                    'created_at'   => now(),
                    'updated_at'   => now()
                ],
                [
                    'name'         => 'Semarang Outlet',
                    'email'        => 'semarangoutlet@example.com',
                    'country_code' => '+62',
                    'phone'        => '1275362435',
                    'latitude'     => '-6.9667',
                    'longitude'    => '110.4203',
                    'city'         => "Semarang",
                    'state'        => "Central Java",
                    'zip_code'     => "50232",
                    'address'      => "House :20, Road: 19, Block: B, Semarang",
                    'status'       => Status::ACTIVE,
                    'created_at'   => now(),
                    'updated_at'   => now()
                ],
            ]);
        }
    }
}

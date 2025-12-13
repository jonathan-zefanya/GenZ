<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Dipokhalder\EnvEditor\EnvEditor;
use Illuminate\Database\Seeder;


class SupplierTableSeeder extends Seeder
{
    public array $fashionSuppliers = [
        [
            'company'      => 'Orant Tua',
            'name'         => 'Ir. Sumanto',
            'email'        => 'sumanto@example.com',
            'country_code' => '+62',
            'phone'        => '12548723456',
            'address'      => 'Bogor Indonesia',
            'country'      => 'Indonesia',
            'state'        => 'West Java',
            'city'         => 'Bogor',
            'zip_code'     => '16111'
        ],
        [
            'company'      => 'NMAX',
            'name'         => 'Lukas Siahaan',
            'email'        => 'lukas@example.com',
            'country_code' => '+62',
            'phone'        => '12548797653',
            'address'      => 'Bogor Indonesia',
            'country'      => 'Indonesia',
            'state'        => 'West Java',
            'city'         => 'Bogor',
            'zip_code'     => '16111'
        ],
    ];

    public function run(): void
    {
        $envService = new EnvEditor();
        if ($envService->getValue('DEMO') && $envService->getValue('DISPLAY_TYPE') == 'fashion') {
            foreach ($this->fashionSuppliers as $fashionSupplier) {
                Supplier::create([
                    'company'      => $fashionSupplier['company'],
                    'name'         => $fashionSupplier['name'],
                    'email'        => $fashionSupplier['email'],
                    'country_code' => $fashionSupplier['country_code'],
                    'phone'        => $fashionSupplier['phone'],
                    'address'      => $fashionSupplier['address'],
                    'country'      => $fashionSupplier['country'],
                    'state'        => $fashionSupplier['state'],
                    'city'         => $fashionSupplier['city'],
                    'zip_code'     => $fashionSupplier['zip_code']
                ]);
            }
        }
    }
}

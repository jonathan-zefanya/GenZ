<?php

namespace Database\Seeders;

use App\Enums\Ask;
use App\Models\User;
use App\Enums\Status;
use App\Models\Address;
use App\Enums\Role as EnumRole;
use Illuminate\Database\Seeder;
use Dipokhalder\EnvEditor\EnvEditor;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $envService = new EnvEditor();

        $admin      = User::create([
            'name'              => 'Admin GenZ',
            'email'             => 'admin@example.com',
            'phone'             => '1254875855',
            'username'          => 'admin',
            'email_verified_at' => now(),
            'password'          => bcrypt('123456'),
            'status'            => Status::ACTIVE,
            'country_code'      => '+62',
            'is_guest'          => Ask::NO
        ]);
        $admin->assignRole(EnumRole::ADMIN);
        if ($envService->getValue('DEMO')) {
            Address::create([
                'full_name'    => $admin->name,
                'email'        => $admin->email,
                'country_code' => $admin->country_code,
                'phone'        => $admin->phone,
                'country'      => "Indonesia",
                'state'        => 'Banten',
                'city'         => 'Tangerang Selatan',
                'zip_code'     => '15310',
                'address'      => 'House :20, Road: 19, Block: B, Tangerang Selatan',
                'user_id'      => $admin->id,
            ]);
            Address::create([
                'full_name'    => $admin->name,
                'email'        => $admin->email,
                'country_code' => $admin->country_code,
                'phone'        => $admin->phone,
                'country'      => "Indonesia",
                'state'        => 'Banten',
                'city'         => 'Tangerang Selatan',
                'zip_code'     => '15310',
                'address'      => 'House :31, Road: 9, Block: A, Tangerang Selatan',
                'user_id'      => $admin->id,
            ]);
        }

        $customer = User::create([
            'name'              => 'Demo Customer',
            'email'             => 'walkingcustomer@example.com',
            'phone'             => '125444455',
            'username'          => 'default-customer',
            'email_verified_at' => now(),
            'password'          => bcrypt('123456'),
            'status'            => Status::ACTIVE,
            'country_code'      => '+62',
            'is_guest'          => Ask::NO
        ]);
        $customer->assignRole(EnumRole::CUSTOMER);
        if ($envService->getValue('DEMO')) {
            Address::create([
                'full_name'    => $customer->name,
                'email'        => $customer->email,
                'country_code' => $customer->country_code,
                'phone'        => $customer->phone,
                'country'      => "Indonesia",
                'state'        => 'Banten',
                'city'         => 'Tangerang Selatan',
                'zip_code'     => '15310',
                'address'      => 'House :3, Road: 11, Block: A, Tangerang Selatan',
                'user_id'      => $customer->id,
            ]);
        }

        if ($envService->getValue('DEMO')) {
            $customerOne = User::create([
                'name'              => 'Tribbie',
                'email'             => 'customer@example.com',
                'phone'             => '125333344',
                'username'          => 'tribbie',
                'email_verified_at' => now(),
                'password'          => bcrypt('123456'),
                'status'            => Status::ACTIVE,
                'country_code'      => '+62',
                'is_guest'          => Ask::NO
            ]);
            $customerOne->assignRole(EnumRole::CUSTOMER);
            Address::create([
                'full_name'    => $customerOne->name,
                'email'        => $customerOne->email,
                'country_code' => $customerOne->country_code,
                'phone'        => $customerOne->phone,
                'country'      => "Indonesia",
                'state'        => 'Banten',
                'city'         => 'Tangerang Selatan',
                'zip_code'     => '15310',
                'address'      => 'House :3, Road: 1, Block: C, Tangerang Selatan',
                'user_id'      => $customerOne->id,
            ]);
            Address::create([
                'full_name'    => $customerOne->name,
                'email'        => $customerOne->email,
                'country_code' => $customerOne->country_code,
                'phone'        => $customerOne->phone,
                'country'      => "Indonesia",
                'state'        => 'Banten',
                'city'         => 'Tangerang Selatan',
                'zip_code'     => '15310',
                'address'      => 'House :30, Road: 13, Block: A, Tangerang Selatan',
                'user_id'      => $customerOne->id,
            ]);

            $employeeOne = User::create([
                'name'              => 'Cyrene',
                'email'             => 'manager@example.com',
                'phone'             => '1275333453',
                'username'          => 'cyrene1313',
                'email_verified_at' => now(),
                'password'          => bcrypt('123456'),
                'status'            => Status::ACTIVE,
                'country_code'      => '+62',
                'is_guest'          => Ask::NO
            ]);
            $employeeOne->assignRole(EnumRole::MANAGER);
            Address::create([
                'full_name'    => $employeeOne->name,
                'email'        => $employeeOne->email,
                'country_code' => $employeeOne->country_code,
                'phone'        => $employeeOne->phone,
                'country'      => "Indonesia",
                'state'        => 'Banten',
                'city'         => 'Tangerang Selatan',
                'zip_code'     => '15310',
                'address'      => 'House :10, Road: 5, Block: A, Tangerang Selatan',
                'user_id'      => $employeeOne->id,
            ]);

            $employeeTwo = User::create([
                'name'              => 'Nahida',
                'email'             => 'nahida@example.com',
                'phone'             => '1257654433',
                'username'          => 'nahida3324',
                'email_verified_at' => now(),
                'password'          => bcrypt('123456'),
                'status'            => Status::ACTIVE,
                'country_code'      => '+62',
                'is_guest'          => Ask::NO
            ]);
            $employeeTwo->assignRole(EnumRole::MANAGER);
            Address::create([
                'full_name'    => $employeeTwo->name,
                'email'        => $employeeTwo->email,
                'country_code' => $employeeTwo->country_code,
                'phone'        => $employeeTwo->phone,
                'country'      => "Indonesia",
                'state'        => 'Banten',
                'city'         => 'Tangerang Selatan',
                'zip_code'     => '15310',
                'address'      => 'House :30, Road: 4, Block: D, Tangerang Selatan',
                'user_id'      => $employeeTwo->id,
            ]);

            $posOperatorOne = User::create([
                'name'              => 'Castorice ',
                'email'             => 'posoperator@example.com',
                'phone'             => '156873641',
                'username'          => 'castorice343',
                'email_verified_at' => now(),
                'password'          => bcrypt('123456'),
                'status'            => Status::ACTIVE,
                'country_code'      => '+62',
                'is_guest'          => Ask::NO
            ]);
            $posOperatorOne->assignRole(EnumRole::POS_OPERATOR);
            Address::create([
                'full_name'    => $posOperatorOne->name,
                'email'        => $posOperatorOne->email,
                'country_code' => $posOperatorOne->country_code,
                'phone'        => $posOperatorOne->phone,
                'country'      => "Indonesia",
                'state'        => 'Banten',
                'city'         => 'Tangerang Selatan',
                'zip_code'     => '15310',
                'address'      => 'House :30, Road: 4, Block: D, Tangerang Selatan',
                'user_id'      => $posOperatorOne->id,
            ]);

            $posOperatorTwo = User::create([
                'name'              => 'Lumine',
                'email'             => 'lumine@example.com',
                'phone'             => '1249955570',
                'username'          => 'lumine232',
                'email_verified_at' => now(),
                'password'          => bcrypt('123456'),
                'status'            => Status::ACTIVE,
                'country_code'      => '+62',
                'is_guest'          => Ask::NO
            ]);
            $posOperatorTwo->assignRole(EnumRole::POS_OPERATOR);
            Address::create([
                'full_name'    => $posOperatorTwo->name,
                'email'        => $posOperatorTwo->email,
                'country_code' => $posOperatorTwo->country_code,
                'phone'        => $posOperatorTwo->phone,
                'country'      => "Indonesia",
                'state'        => 'Banten',
                'city'         => 'Tangerang Selatan',
                'zip_code'     => '15310',
                'address'      => 'House :10, Road: 2, Block: C, Tangerang Selatan',
                'user_id'      => $posOperatorTwo->id,
            ]);

            $stuffOne = User::create([
                'name'              => 'Nilou',
                'email'             => 'stuff@example.com',
                'phone'             => '1222224443',
                'username'          => 'nilou768',
                'email_verified_at' => now(),
                'password'          => bcrypt('123456'),
                'status'            => Status::ACTIVE,
                'country_code'      => '+62',
                'is_guest'          => Ask::NO
            ]);
            $stuffOne->assignRole(EnumRole::STUFF);
            Address::create([
                'full_name'    => $stuffOne->name,
                'email'        => $stuffOne->email,
                'country_code' => $stuffOne->country_code,
                'phone'        => $stuffOne->phone,
                'country'      => "Indonesia",
                'state'        => 'Banten',
                'city'         => 'Tangerang Selatan',
                'zip_code'     => '15310',
                'address'      => 'House :11, Road: 12, Block: C, Tangerang Selatan',
                'user_id'      => $stuffOne->id,
            ]);

            $stuffTwo = User::create([
                'name'              => 'Stele',
                'email'             => 'stele@example.com',
                'phone'             => '1238426043',
                'username'          => 'stele890',
                'email_verified_at' => now(),
                'password'          => bcrypt('123456'),
                'status'            => Status::ACTIVE,
                'country_code'      => '+62',
                'is_guest'          => Ask::NO
            ]);
            $stuffTwo->assignRole(EnumRole::STUFF);
            Address::create([
                'full_name'    => $stuffTwo->name,
                'email'        => $stuffTwo->email,
                'country_code' => $stuffTwo->country_code,
                'phone'        => $stuffTwo->phone,
                'country'      => "Indonesia",
                'state'        => 'Banten',
                'city'         => 'Tangerang Selatan',
                'zip_code'     => '15310',
                'address'      => 'House :1, Road: 2, Block: A, Tangerang Selatan',
                'user_id'      => $stuffTwo->id,
            ]);
        }
    }
}

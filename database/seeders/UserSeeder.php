<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin  = User::firstOrCreate(
            ['email' => 'superadmin@gmail.com'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('Admin@123'),
            ]
        );
        $superAdmin->assignRole('super_admin');
        
        $companyAdmin = User::firstOrCreate(
            ['email' => 'companyadmin@gmail.com'],
            [
                'name' => 'Company Admin',
                'password' => '12345678',
            ]
        );
        $companyAdmin->assignRole('company_admin');
    }
}

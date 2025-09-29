<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RolesAndUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Roles create karo
        $superAdminRole = Role::firstOrCreate(['name' => 'super_admin']);
        $companyAdminRole = Role::firstOrCreate(['name' => 'company_admin']);
        $projectManagerRole = Role::firstOrCreate(['name' => 'project_manager']);

        // 2. Super Admin User
        $superAdmin = User::firstOrCreate(
            ['email' => 'superadmin@gmail.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('Admin@123'), // change in prod
            ]
        );
        $superAdmin->assignRole($superAdminRole);

        // 3. Company Admin User
        $companyAdmin = User::firstOrCreate(
            ['email' => 'legacyelectricalcompany@gmail.com'],
            [
                'name' => 'Company Admin',
                'password' => Hash::make('12345678'),
            ]
        );
        $companyAdmin = User::firstOrCreate(
            ['email' => 'companytesting@gmail.com'],
            [
                'name' => 'companytestin',
                'password' => Hash::make('12345678'),
            ]
        );
        $companyAdmin->assignRole($companyAdminRole);

        // 4. Project Manager User
        $projectManager = User::firstOrCreate(
            ['email' => 'pm@gmail.com'],
            [
                'name' => 'John doe',
                'password' => Hash::make('12345678'),
            ]
        );
        $projectManager = User::firstOrCreate(
            ['email' => 'pmtesting2@gmail.com'],
            [
                'name' => 'pm example',
                'password' => Hash::make('12345678'),
            ]
        );
        $projectManager->assignRole($projectManagerRole);
    }
}

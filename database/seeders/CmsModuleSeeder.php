<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CmsModule;

class CmsModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CmsModule::insert([
            [
                'name' => 'Dashboard',
                'route_name' => 'dashboard',
                'icon' => 'fa-regular fa-house',
                'sort_order' => 1,
                'status' => 'active',
                'parent_id' => 0,
                
            ],
            [
                'name' => 'Projects',
                'route_name' => 'projects.index',
                'icon' => 'fa-solid fa-diagram-project',
                'sort_order' => 2,
                'status' => 'active',
                'parent_id' => 0,

            ],
            [
                'name' => 'Companies',
                'route_name' => 'companies.index',
                'icon' => 'pompanies',
                'sort_order' => 3,
                'status' => 'active',
                'parent_id' => 0,
            ],
            [
                'name' => 'Billing',
                'route_name' => 'billing.index',
                'icon' => 'billing',
                'sort_order' => 4,
                'status' => 'active',
                'parent_id' => 0,
            ],
            [
                'name' => 'Company Profile',
                'route_name' => 'company-profile.index',
                'icon' => 'company-profile',
                'sort_order' => 5,
                'status' => 'active',
                'parent_id' => 0,
            ],
            [
                'name' => 'Users',
                'route_name' => 'users.index',
                'icon' => 'fa-solid fa-users',
                'sort_order' => 6,
                'status' => 'active',
                'parent_id' => 0,
            ],

            // submenu projects
            [
                'name' => 'Add Projects',
                'route_name' => 'projects.create',
                'icon' => 'fa-solid fa-circle-plus',
                'sort_order' => 1,
                'status' => 'active',
                'parent_id' => 2, // Parent is Projects
            ],
            [
                'name' => 'Update Projects',
                'route_name' => 'projects.edit',
                'icon' => 'fa-solid fa-pen-to-square',
                'sort_order' => 2,
                'status' => 'active',
                'parent_id' => 2, // Parent is Projects
            ],
            //
            [
                'name' => 'Add Users',
                'route_name' => 'users.create',
                'icon' => 'fa-solid fa-circle-plus',
                'sort_order' => 1,
                'status' => 'active',
                'parent_id' => 6, // Parent is Users
            ],
            [
                'name' => 'Update Users',
                'route_name' => 'users.edit',
                'icon' => 'fa-solid fa-pen-to-square',
                'sort_order' => 2,
                'status' => 'active',
                'parent_id' => 6, // Parent is Users
            ],
        ]);
    }
}

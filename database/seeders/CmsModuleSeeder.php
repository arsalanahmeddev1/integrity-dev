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
                'id' => 1,
                'name' => 'Dashboard',
                'route_name' => 'dashboard',
                'icon' => 'fa-regular fa-house',
                'sort_order' => 1,
                'status' => 'active',
                'parent_id' => 0,
                
            ],
            [
                'id' => 2,
                'name' => 'Projects',
                'route_name' => 'projects.index',
                'icon' => 'fa-solid fa-diagram-project',
                'sort_order' => 2,
                'status' => 'active',
                'parent_id' => 0,

            ],
            [
                'id' => 3,
                'name' => 'Companies',
                'route_name' => 'companies.index',
                'icon' => 'pompanies',
                'sort_order' => 3,
                'status' => 'active',
                'parent_id' => 0,
            ],
            [
                'id' => 4,
                'name' => 'Billing',
                'route_name' => 'billing.index',
                'icon' => 'billing',
                'sort_order' => 4,
                'status' => 'active',
                'parent_id' => 0,
            ],
            [
                'id' => 5,
                'name' => 'Company Profile',
                'route_name' => 'company-profile.index',
                'icon' => 'company-profile',
                'sort_order' => 5,
                'status' => 'active',
                'parent_id' => 0,
            ],

            // submenu projects
            [
                'id' => 6,
                'name' => 'Add Projects',
                'route_name' => 'projects.create',
                'icon' => 'fa-solid fa-circle-plus',
                'sort_order' => 1,
                'status' => 'active',
                'parent_id' => 2, // Parent is Projects
            ],
            [
                'id' => 7,
                'name' => 'Update Projects',
                'route_name' => 'projects.edit',
                'icon' => 'fa-solid fa-pen-to-square',
                'sort_order' => 2,
                'status' => 'active',
                'parent_id' => 2, // Parent is Projects
            ],
        ]);
    }
}

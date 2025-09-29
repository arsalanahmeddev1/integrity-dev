<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CmsModulePermission;
class CmsModulePermissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CmsModulePermission::insert([
            // Admin Role
            [
                'role_id' => 1,
                'module_id' => 1,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 1,
                'is_delete' => 1,
            ],
            [
                'role_id' => 1,
                'module_id' => 2,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 1,
                'is_delete' => 1,
            ],
            [
                'role_id' => 1,
                'module_id' => 3,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 1,
                'is_delete' => 1,
            ],
            [
                'role_id' => 1,
                'module_id' => 4,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 1,
                'is_delete' => 1,
            ],
            [
                'role_id' => 1,
                'module_id' => 5,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 1,
                'is_delete' => 1,
            ],
            // Company Admin Role
            [
                'role_id' => 2,
                'module_id' => 1,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 1,
                'is_delete' => 1,
            ],
            [
                'role_id' => 2,
                'module_id' => 2,
                'is_add' => 0,
                'is_view' => 1,
                'is_update' =>0,
                'is_delete' => 0,
            ],
            [
                'role_id' => 2,
                'module_id' => 3,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 0,
                'is_delete' => 0,
            ],
            [
                'role_id' => 2,
                'module_id' => 4,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 0,
                'is_delete' => 0,
            ],
            // Project Manager Role
            [
                'role_id' => 3,
                'module_id' => 1,
                'is_add' => 0,
                'is_view' => 1,
                'is_update' => 0,
                'is_delete' => 0,
            ],
            [
                'role_id' => 3,
                'module_id' => 2,
                'is_add' => 0,
                'is_view' => 1,
                'is_update' => 0,
                'is_delete' => 0,
            ],
            [
                'role_id' => 3,
                'module_id' => 3,
                'is_add' => 0,
                'is_view' => 1,
                'is_update' => 0,
                'is_delete' => 0,
            ],
            [
                'role_id' => 3,
                'module_id' => 4,
                'is_add' => 0,
                'is_view' => 1,
                'is_update' => 0,
                'is_delete' => 0,
            ],
            [
                'role_id' => 3,
                'module_id' => 5,
                'is_add' => 0,
                'is_view' => 1,
                'is_update' => 0,
                'is_delete' => 0,
            ],
        ]);
    }
}

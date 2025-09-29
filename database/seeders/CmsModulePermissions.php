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
                'id' => 1,
                'role_id' => 1,
                'module_id' => 1,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 1,
                'is_delete' => 1,
            ],
            [
                'id' => 2,
                'role_id' => 1,
                'module_id' => 2,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 1,
                'is_delete' => 1,
            ],
            [
                'id' => 3,
                'role_id' => 1,
                'module_id' => 3,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 1,
                'is_delete' => 1,
            ],
            [
                'id' => 4,
                'role_id' => 1,
                'module_id' => 4,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 1,
                'is_delete' => 1,
            ],
            [
                'id' => 5,
                'role_id' => 1,
                'module_id' => 5,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 1,
                'is_delete' => 1,
            ],
            // Company Admin Role
            [
                'id' => 6,
                'role_id' => 2,
                'module_id' => 1,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 1,
                'is_delete' => 1,
            ],
            [
                'id' => 7,
                'role_id' => 2,
                'module_id' => 2,
                'is_add' => 0,
                'is_view' => 1,
                'is_update' =>0,
                'is_delete' => 0,
            ],
            [
                'id' => 8,
                'role_id' => 2,
                'module_id' => 3,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 0,
                'is_delete' => 0,
            ],
            [
                'id' => 9,
                'role_id' => 2,
                'module_id' => 4,
                'is_add' => 1,
                'is_view' => 1,
                'is_update' => 0,
                'is_delete' => 0,
            ],
            // Project Manager Role
            [
                'id' => 10,
                'role_id' => 3,
                'module_id' => 1,
                'is_add' => 0,
                'is_view' => 1,
                'is_update' => 0,
                'is_delete' => 0,
            ],
            [
                'id' => 11,
                'role_id' => 3,
                'module_id' => 2,
                'is_add' => 0,
                'is_view' => 1,
                'is_update' => 0,
                'is_delete' => 0,
            ],
            [
                'id' => 12,
                'role_id' => 3,
                'module_id' => 3,
                'is_add' => 0,
                'is_view' => 1,
                'is_update' => 0,
                'is_delete' => 0,
            ],
            [
                'id' => 13,
                'role_id' => 3,
                'module_id' => 4,
                'is_add' => 0,
                'is_view' => 1,
                'is_update' => 0,
                'is_delete' => 0,
            ],
            [
                'id' => 14,
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

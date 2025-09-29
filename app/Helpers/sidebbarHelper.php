<?php

use App\Models\CmsModule;
use App\Models\CmsModulePermission;

use Illuminate\Support\Facades\Auth;


if (!function_exists('dynamic_sidebar')) {
    function dynamic_sidebar($role_id)
    {
        return CmsModule::with(['children.permissions' => function ($q) use ($role_id) {
            $q->where('role_id', $role_id);
        }])
            ->where('status', 'active')
            ->where('parent_id', 0)
            ->orderBy('sort_order', 'asc')
            ->get();
    }
}

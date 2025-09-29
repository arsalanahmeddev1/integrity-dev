<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CmsModule extends Model
{
    protected $table = 'cms_module';

    protected $fillable = [
        'name',
        'route_name',
        'icon',
        'sort_order',
        'status',
        'parent_id'
    ];

    public function children()
    {
        return $this->hasMany(CmsModule::class, 'parent_id', 'id')
                    ->orderBy('sort_order', 'asc');
    }

    public function permissions()
    {
        return $this->hasMany(CmsModulePermission::class, 'module_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(CmsModule::class, 'parent_id', 'id');
    }



    public static function getModulesaaa($role_id = 0)
    {
        $query = self::select('cms_module.*', 'cmp.is_add', 'cmp.is_view', 'cmp.is_update', 'cmp.is_delete')
            ->with([
                'child' => function ($query) use ($role_id) {
                    $query->select('cms_module.*', 'cmp.is_add', 'cmp.is_view', 'cmp.is_update', 'cmp.is_delete')
                        ->leftJoin('cms_module_permission AS cmp', function ($leftJoin) use ($role_id) {
                            $leftJoin->on('cmp.cms_module_id', '=', 'cms_module.id')
                                ->where('cmp.role_id', '=', $role_id);
                        });
                    $query->where('status', '1')->orderBy('sort_order', 'asc');
                }
            ])
            ->leftJoin('cms_module_permission AS cmp', function ($leftJoin) use ($role_id) {
                $leftJoin->on('cmp.cms_module_id', '=', 'cms_module.id')
                    ->where('cmp.role_id', '=', $role_id);
            })
            ->where('status', '1')
            ->orderBy('sort_order', 'asc')
            ->get();
        return $query;
    }

    public static function getModules($role_id)
    {
        //$data = Cache::rememberForever('module_permission_' . $role_id, function () use ($role_id){
        $main_modules = [];
        $modules      = [];
        $parent_ids   = [];
        $query = \DB::table('cms_module_permission AS cmp')
            ->selectRaw('cm.*, cmp.is_add, cmp.is_view,cmp.is_update, cmp.is_delete')
            ->join('cms_module AS cm', 'cm.id', '=', 'cmp.module_id')
            // ->join('cms_module AS cm', 'cm.id', '=', 'cmp.module_id')
            // ->select(
            //     'cm.id',
            //     'cm.name',
            //     'cm.route_name',
            //     'cm.icon',
            //     'cm.sort_order',
            //     'cmp.is_add',
            //     'cmp.is_view',
            //     'cmp.is_update',
            //     'cmp.is_delete'
            // )
            ->where('cmp.role_id', $role_id)
            // ->where('cm.status', '1')
            // ->orderBy('cm.sort_order', 'asc')
            //->whereRaw('(cmp.is_add = 1 OR cmp.is_view = 1 OR cmp.is_update = 1 OR cmp.is_delete = 1)')
            //->where('cm.status','1')
            //->orderBy('cm.sort_order','asc')
            ->get();

        // dd($query->toArray());
        return $query;


        if (count($query)) {
            foreach ($query as $result) {
                $result->child = [];
                $modules[$result->parent_id][] = $result;
                if ($result->parent_id != 0)
                    $parent_ids[] = $result->parent_id;
            }
            $main_modules = $modules[0];
            if (count($parent_ids)) {
                $parent_modules = \DB::table('cms_module')->whereIn('id', array_unique($parent_ids))->get();
                foreach ($parent_modules as $pm) {
                    $pm->child      = $modules[$pm->id];
                    $main_modules[] = $pm;
                }
            }
        }
        return $main_modules;
        // });
        return $data;
    }
}

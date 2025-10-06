<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        return view('screens.admin.users.index', compact('users'));
    }

    public function getData(Request $request)
    {
        $query = User::query();

        return datatables($query)
            ->addColumn('role', function ($row) {
                return $row->getRoleNames()->first() ?? 'Not Set';
            })
            ->editColumn('created_at', fn($row) => $row->created_at ? $row->created_at->format('d M Y') : '')
            ->addColumn('actions', function ($row) {
                return '
                <a href="#" class="action-btns"><i class="fa-solid fa-pen"></i></a>
                <form  method="POST" style="display:inline;">
                    ' . csrf_field() . method_field('DELETE') . '
                    <button type="submit" class="action-btns"><i class="fa-solid fa-trash"></i></button>
                </form>
            ';
            })
            ->rawColumns(['role', 'actions'])
            ->make(true);
    }


    public function create()
    {
        return view('screens.admin.users.create');
    }

    public function edit() {
        return view('screens.admin.users.edit');
    }

    public function update(Request $request) {
        return view('screens.admin.users.edit');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login'); // Ensure the user is logged in
        }

        if (auth()->user()->hasRole('super_admin')) {
            return view('screens.dashboards.superadmin');
        }

        return abort(403, 'Unauthorized'); // If user is not super admin
    }
}

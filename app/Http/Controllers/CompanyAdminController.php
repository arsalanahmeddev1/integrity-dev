<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyAdminController extends Controller
{
    public function index() {
        if(!auth()->check()) {
            return redirect()->route('login');
        }

        if (auth()->user()->hasRole('company_admin')) {
            return view('screens.dashboards.companyadmin');
        }

        return abort(403, 'Unauthorized');
    }
}

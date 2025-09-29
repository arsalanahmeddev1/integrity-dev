<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index()
   {
      $user = checkUser();
      $rolesById = $user->roles->first()->id; 

      if ($rolesById === 1) {
         return view('screens.admin.dashboards.superadmin');
      } elseif ($rolesById === 2) {
         return view('screens.admin.dashboards.companyadmin');
      } elseif ($rolesById === 3) {
         return view('screens.admin.dashboards.projectmanager');
      }
      return redirect()->route('home');
   }
}

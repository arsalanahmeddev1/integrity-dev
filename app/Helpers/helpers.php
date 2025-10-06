<?php
use Illuminate\Support\Facades\Auth;

if(!function_exists('checkUser')) {
    function checkUser() {
        return Auth::user();
    }

}

if (! function_exists('formatRole')) {
    function formatRole($roleName) {
        return \Illuminate\Support\Str::of($roleName ?? 'Not Set')->replace('_', ' ')->title();
    }
}
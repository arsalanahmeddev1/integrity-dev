<?php
use Illuminate\Support\Facades\Auth;

if(!function_exists('checkUser')) {
    function checkUser() {
        return Auth::user();
    }
}
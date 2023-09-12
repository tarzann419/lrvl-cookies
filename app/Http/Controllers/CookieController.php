<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    // set&get using the Cookie Facade

    // SET
    // Cookie::queue('name', 'value', $minutes);
    public function set_cookie(){
        $minutes = 120;
        Cookie::queue('login_cookie', 'Cookie for login details', $minutes);

        return response()->json([
            'Coookie set successfully'
        ]);
    }

    // GET
    // Cookie::get('name')
    public function get_cookie(){
        $value = Cookie::get('login_cookie');
        dd($value);
    }

    // set using the Request response
}

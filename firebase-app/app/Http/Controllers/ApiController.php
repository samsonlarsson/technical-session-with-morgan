<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FirebaseService;

class ApiController extends Controller
{
    public function checkLogin(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');

        $firebase = new FirebaseService();
        dd($firebase->verifyPassword($username, $password));
    }
}

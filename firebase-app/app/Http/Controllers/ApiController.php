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
        return response()->json($firebase->verifyPassword($username, $password));
    }

    public function sendMessage(Request $request) {
        $message = $request->input('message'); // TODO: make this actually json

        $firebase = new FirebaseService();
        $firebase->pushMessage($message);
    }
}

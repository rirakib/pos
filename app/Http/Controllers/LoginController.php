<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('users')->get()->where('email',$email)->where('password',$password)->first();

        if($result)
        {
            $username = $result->username;
            Session::put('username',$username);
            return redirect()->to('/home');
        }
        else{
           return redirect()->back();
        }
    }
}

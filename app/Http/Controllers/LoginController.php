<?php

namespace App\Http\Controllers;

session_start();

use Illuminate\Http\Request;

use App\Login;

class LoginController extends Controller
{
    public function verify(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $login = new Login;

        $u = $login->where([
                           'email' => $email,
                           'password' => $password
                        ])->first();

        if($u != null)
        {
            $temp = $request->session()->put('loggedUser', $u);

            return redirect()->route('userlist');
        }
        else
        {
            return view('welcome');
        }
    }

    public function sessionRemove()
    {
        session()->flush();
        session_destroy();

        //var_dump($count);
        return redirect()->route('index');
    }
}

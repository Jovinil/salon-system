<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginLogoutController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            //switch case to determine the role of the user
            switch(Auth::user()->role)
            {
                case 0:
                    return redirect()->route('admin.index', Auth::id());
                    break;

                case 1:
                    return redirect()->route('customer.index', Auth::id());
                    break;
            }
        }

        //return if login failed
        return back()->with('error', 'Incorrect password or username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
}

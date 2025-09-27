<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        switch($request->role)
        {
            case 1:
                $validation = $request->validate([
                    'full_name' => 'required|string|max:255',
                    'contact_number' => 'required',
                    'email' => 'required|unique:users,email',
                    'password' => 'required|min:8',
                    'role' => 'required',
                ]);

                $user = [
                    'full_name' => $validation['full_name'],
                    'contact_number' => $validation['contact_number'],
                    'email' => $validation['email'],
                    'password' => $validation['password'],
                    'role' => $validation['role']
                ];
                break;
        }

        $userID = User::create($user)->id;

        return redirect()->back()->with('success', 'Signup successful.');
    }

    public function index(int $id)
    {
        $user = DB::table('users')
        ->select('*')
        ->where('id', $id)
        ->first();

        return view('index', compact('user'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view("users");
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     ""
        // ]);

        // DB::table("users")

        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ]);

        dd($user->id);

        // $user = new User();
        // $user->name = $request->username;
        // $user->email = $request->email;
        // $user->password = $request->password;

        // $user->save();

        return redirect('/users');
    }
}

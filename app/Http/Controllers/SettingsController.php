<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function Roles(){
        $roles = Role::oldest('id')->get();
        //dd($settings);
        return view('settings.roles', compact('roles'));

    }

    public function Users(){
        $users = User::latest('id')->get();
        //dd($settings);
        return view('settings.users', compact('users'));

    }

    public function Signin(){
        return view('auth.sign_in');

    }

    public function Reg(){
        return view('auth.sign_up');

    }

}

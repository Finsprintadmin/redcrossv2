<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function Roles(){
        $roles = Role::latest()->get();
        //dd($settings);
        return view('settings.roles', compact('roles'));

    }

    public function Users(){
        $users = User::latest()->get();
        //dd($settings);
        return view('settings.users', compact('users'));

    }
}

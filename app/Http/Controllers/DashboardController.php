<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Index(){

        $campaigns = Campaign::all();

        return view('index',compact('campaigns'));

    }
}

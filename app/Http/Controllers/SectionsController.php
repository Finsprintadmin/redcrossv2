<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function Pledges(){

        return view('sections.pledges');

    }

    public function Transactions(){

        return view('sections.transactions');

    }

    public function Donors(){

        return view('sections.donors');

    }

    public function Campaigns(){

        return view('sections.campaigns');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function Pledges(){

        return view('sections.pledges');

    }

    public function Transactions(){
        $transactions = Transaction::latest()->get();
        //dd($transactions);
        return view('sections.transactions', compact('transactions'));

    }

    public function Donors(){

        return view('sections.donors');

    }

    public function Campaigns(){

        return view('sections.campaigns');

    }

    public function AddCampaign(){

        return view('sections.modal.add_campaign');
    }

}

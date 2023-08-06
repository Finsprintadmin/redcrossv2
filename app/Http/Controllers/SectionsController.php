<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function Pledges(Request $request)
    {
        //dd($request->all());

        return view('sections.pledges');

    }

    public function Transactions(Request $request)
    {
        // $transactions = Transaction::latest()->get();
        $transactions = Transaction::query();
        //dd(collect($request->all()));
        if ($request->filled('q'))
            $transactions = $transactions->where('donor_id', $request->q);
        if ($request->filled('start_date'))
            $transactions = $transactions->whereDate('payment_date', '>=', $request->start_date);
        $transactions = $transactions->latest();

        $transactions = $transactions->get();
        //dd($transactions);
        $filters = $request->all();
        //dd($transactions);
        return view('sections.transactions', compact('transactions', 'filters'));

    }

    public function Donors()
    {

        return view('sections.donors');

    }

    public function Campaigns()
    {

        return view('sections.campaigns');

    }

    public function AddCampaign()
    {

        return view('sections.modal.add_campaign');
    }

}

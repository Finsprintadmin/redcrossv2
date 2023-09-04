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
        if ($request->filled ('q'))
            $transactions = $transactions->where('campaign_id', $request->q);
        if ($request->filled('start_date'))
            $transactions = $transactions->whereDate('payment_date', '>=', $request->start_date);
        if ($request->filled('end_date'))
            $transactions = $transactions->whereDate('payment_date', '<=', $request->end_date);
        if ($request->filled('status'))
            $transactions = $transactions->where('status', $request->status);
        if ($request->filled('currency_id'))
            $transactions = $transactions->where('currency_id', $request->currency_id);

        $transactions = $transactions->with('currency')->latest();

        $transactions = $transactions->get();

        $paginateTransactions = Transaction::paginate(4);
       // return $transactions;
        //dd($transactions);
        $filters = $request->all();
        //dd($transactions);

        return view('sections.transactions', compact('transactions','paginateTransactions', 'filters'));

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

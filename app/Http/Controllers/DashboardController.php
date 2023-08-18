<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Index(){

        $date = Carbon::now();
        $date_string = $date->startOfWeek()->toDateString();
        $date_month = $date->startOfMonth()->toDateString();
       // dd($date_string);
        //$date_string = $date->toDateString();
        //$date_time_string = $date->toDateTimeString();
        //dd($date_string);
        //$transaction_total = Transaction::where('status', 1)->count();
        //$transaction_total = Transaction::where('status', 2)->where('currency_id', 2)->whereDate('created_at', '>',$date_string)->sum('amount');
        $amount_kes = Transaction::where('status', 1)->where('currency_id', 1)->sum('amount');
        $amount_usd = Transaction::where('status', 1)->where('currency_id', 2)->sum('amount');
        $amount_kes_week = Transaction::where('status', 1)->where('currency_id', 1)->whereDate('created_at', '>=', $date_string)->sum('amount');
        $amount_usd_week = Transaction::where('status', 1)->where('currency_id', 2)->whereDate('created_at', '>=', $date_string)->sum('amount');
        $amount_kes_month = Transaction::where('status', 1)->where('currency_id', 1)->whereDate('created_at', '>=', $date_month)->sum('amount');
        $amount_usd_month = Transaction::where('status', 2)->where('currency_id', 2)->whereDate('created_at', '>=', $date_month)->sum('amount');
        //dd($amount_kes_week);
        //dd($amount_kes);
        $campaigns = Campaign::paginate(5);

        return view('index',compact('campaigns', 'amount_kes', 'amount_kes_week','date_month','amount_usd', 'amount_usd_week', 'amount_kes_month', 'amount_usd_month' ));

    }
}

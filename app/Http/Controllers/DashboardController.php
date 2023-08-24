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
        $date_quarterly = $date->subMonths(3)->startOfMonth()->toDateString();
        $minute_time = $date->startOfMinute()->toDateTimeString();
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

        $amount_kes_quarterly = Transaction::where('status', 1)->where('currency_id', 1)->whereDate('created_at', '>=', $date_quarterly)->sum('amount');
        $amount_usd_quarterly = Transaction::where('status', 1)->where('currency_id', 1)->whereDate('created_at', '>=', $date_quarterly)->sum('amount');

        $amount_overall_mpesa = Transaction::where('status', 1)->where('currency_id', 1)->where('payment_method_id', 1)->sum('amount');
        $amount_overall_airtelMoney = Transaction::where('status', 1)->where('currency_id', 1)->where('payment_method_id', 2)->sum('amount');
        $amount_overall_cardLocal = Transaction::where('status', 1)->where('currency_id', 1)->where('payment_method_id', 3)->sum('amount');
        $amount_overall_cardInternational = Transaction::where('status', 1)->where('currency_id', 2)->where('payment_method_id', 4)->sum('amount');

        $amount_campaign_kes_minute = Transaction::where('status', 1)->where('currency_id', 1)->where('payment_method_id', 1)->whereDate('created_at', '>=', $minute_time)->sum('amount'); //To change the payment_method_id and put the campaign_id
        $amount_campaign_usd_minute = Transaction::where('status', 1)->where('currency_id', 2)->where('payment_method_id', 2)->whereDate('created_at', '>=', $minute_time)->sum('amount'); //To change the payment_method_id and put the campaign_id

        //dd($amount_kes_quarterly);
        //dd($amount_kes);
        $campaigns = Campaign::paginate(5);

        return view('index',compact('campaigns', 'amount_kes', 'amount_kes_week','date_month','amount_usd', 'amount_usd_week', 'amount_kes_month', 'amount_usd_month','amount_kes_quarterly','amount_usd_quarterly','amount_overall_mpesa','amount_overall_airtelMoney','amount_overall_cardLocal','amount_overall_cardInternational','amount_campaign_kes_minute','amount_campaign_usd_minute' ));

    }
}

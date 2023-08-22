<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use Carbon\Carbon;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

class CampaignsController extends Controller
{
    public function Create(){
        return view('sections.campaign.create_campaign');
    }

    public function Store(Request $request){
        $campaign = new Campaign($request->all());
        $campaign->save();
        return redirect()->route('all_campaigns');
    }
    public function Show(){
        $campaigns = Campaign::all();
        return view('sections.campaigns',compact('campaigns'));
    }
    public function edit($id){
        $campaign = Campaign::findOrFail($id);

        return view('sections.campaign.edit_campaign', compact('campaign'));

    }

    public function update(Request $request){
        $campaign = Campaign::find($request->id);
        //$campaign = Campaign::where('id', $request->id)->get();
        $campaign->update($request->all());
        return redirect()->route('all_campaigns');

    }

    public function ViewCampaign($id)
    {

        $dan = Campaign::find($id);
        $campaign_amount_kes = Transaction::where('campaign_id', $dan)->where('status', 1)->where('currency_id', 1)->sum('amount');
        $campaign_amount_usd = Transaction::where('campaign_id', $dan)->where('status', 1)->where('currency_id', 2)->sum('amount');


        $date = Carbon::now();
        $date_string = $date->startOfWeek()->toDateString();
        $date_month = $date->startOfMonth()->toDateString();
        $date_year = $date->startOfYear()->toDateString();

        $campaign_amount_kes_week = Transaction::where('campaign_id', $dan)->where('status', 1)->where('currency_id', 1)->whereDate('created_at', '>=', $date_string)->sum('amount');
        $campaign_amount_usd_week = Transaction::where('campaign_id', $dan)->where('status', 1)->where('currency_id', 2)->whereDate('created_at', '>=', $date_string)->sum('amount');
        $campaign_amount_kes_month = Transaction::where('campaign_id', $dan)->where('status', 1)->where('currency_id', 1)->whereDate('created_at', '>=', $date_month)->sum('amount');
        $campaign_amount_usd_month = Transaction::where('campaign_id', $dan)->where('status', 1)->where('currency_id', 2)->whereDate('created_at', '>=', $date_month)->sum('amount');
        $campaign_amount_kes_year = Transaction::where('campaign_id', $dan)->where('status', 1)->where('currency_id', 1)->whereDate('created_at', '>=', $date_year)->sum('amount');
        $campaign_amount_usd_year = Transaction::where('campaign_id', $dan)->where('status', 1)->where('currency_id', 2)->whereDate('created_at', '>=', $date_year)->sum('amount');

        $campaign_amount_mpesa = Transaction::where('campaign_id', $dan)->where('status', 1)->where('currency_id', 1)->where('payment_method_id', 1)->whereDate('created_at','>=', $date_year)->sum('amount');
        $campaign_amount_airtelMoney = Transaction::where('campaign_id', $dan)->where('status', 1)->where('currency_id', 1)->where('payment_method_id', 2)->whereDate('created_at','>=', $date_year)->sum('amount');
        $campaign_amount_cardLocal = Transaction::where('campaign_id', $dan)->where('status', 1)->where('currency_id', 1)->where('payment_method_id', 3)->whereDate('created_at','>=', $date_year)->sum('amount');
        $campaign_amount_cardInternational = Transaction::where('campaign_id', $dan)->where('status', 1)->where('currency_id', 2)->where('payment_method_id', 4)->whereDate('created_at','>=', $date_year)->sum('amount');

        $campaigns = Campaign::all();

        //dd($campaign_amount_kes_month);

        //dd($campaigns);
        //$campaign_2 = Campaign::where('id', $id)->first();
        //$campaign_3 = DB::table('campaigns')->where('id', $id)->first();
        //dd($campaign_3);
        return view('sections.campaign.view_single_campaign',compact('dan','campaigns', 'campaign_amount_kes', 'campaign_amount_usd', 'campaign_amount_kes_week', 'campaign_amount_kes_month', 'campaign_amount_usd_week', 'campaign_amount_usd_month', 'campaign_amount_kes_year', 'campaign_amount_usd_year','campaign_amount_mpesa','campaign_amount_airtelMoney','campaign_amount_cardLocal','campaign_amount_cardInternational'));

    }
    // public function CampaignPerformance($id)
    // {

    //     $campaign = Campaign::find($id);

    //     return view('sections.campaign.campaign_performance',compact('campaign'));

    // }

    // public function CreateCampaignModal()
    // {

    //     return view('sections.modal.add_campaign');
    // }


}

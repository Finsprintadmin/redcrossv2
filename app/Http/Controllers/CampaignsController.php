<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignsController extends Controller
{
    public function Create(){
        return view('sections.campaign.create_campaign');
    }

    public function Store(Request $request){
        $campaign = new Campaign($request->all());
        $campaign->save();
        return redirect()->route('show_campaign');
    }
    public function Show(){
        $campaigns = Campaign::all();
        return view('sections.campaigns',compact('campaigns'));
    }

}

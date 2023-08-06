<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
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

        $campaigns = Campaign::find($id);
        //$campaign_2 = Campaign::where('id', $id)->first();
        //$campaign_3 = DB::table('campaigns')->where('id', $id)->first();
        //dd($campaign_3);
        return view('sections.campaign.view_single_campaign',compact('campaigns'));

    }
    public function CampaignPerformance($id)
    {

        $campaign = Campaign::find($id);

        return view('sections.campaign.campaign_performance',compact('campaign'));

    }

    public function CreateCampaignModal()
    {

        return view('sections.modal.add_campaign');
    }


}

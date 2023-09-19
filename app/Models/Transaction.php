<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = ['id','campaign_id','donor_id','currency_id','payment_method_id','pledge_id','payment_reference','amount','gateway','payment_date','status'];

    public function campaign(){
        return $this->belongsTo(Campaign::class, 'id', 'campaign_id');
    }

    public function currency(){
        return $this->belongsTo(Currency::class);
    }

    public function getDecodedStatusAttribute(){
        if ($this->status == 1)
            return "success";
        elseif ($this->status == 2)
            return "Pending";

        return 'unknown';
    }

    protected $appends = ['decoded_status'];

}


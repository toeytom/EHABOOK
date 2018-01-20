<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    protected $fillable = [
        'user_id' , 'name','stripe_id','trial_ends_at','ends_at','stripe_plan','quantity',
    ];
}

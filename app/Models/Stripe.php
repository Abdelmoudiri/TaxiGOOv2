<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stripe extends Model
{
    protected $guarded=[];

    public function reservation()
    {
        $this->belongsTo(Reservation::class);
    }
}

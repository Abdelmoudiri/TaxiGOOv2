<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = [];

    // public function reservations()

    public function driver(){
        return $this->belongsTo(Driver::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function stripe()
    {
        $this->hasOne(Stripe::class);
    }
}

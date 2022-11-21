<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'capacity',
        'reg_price',
        'prem_price',
        'hall_id',
    ];

    public function hall()
    {
        return $this->belongsTo('App\Models\Hall','hall_id');
    }

    public function booking()
    {
        return $this->hasMany('App\Models\Booking');
    }

}

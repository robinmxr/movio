<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowBooking extends Model
{
    use HasFactory;

    protected $fillable=[
        'date',
        'booking_id',
    ];


    public function booking()
    {
        return $this->belongsTo('App\MOdels\Booking','booking_id');
    }

    public function ticket()
    {
        return $this->hasMany('App\Models\Ticket');
    }
}

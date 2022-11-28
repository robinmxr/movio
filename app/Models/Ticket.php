<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable=[
        'show_booking_id',
        'number',
        'status',
        'price',
        'quality',
    ];



    public function showbooking()
    {
        return $this->belongsTo('App\Models\ShowBooking','show_booking_id');
    }
}

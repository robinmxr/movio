<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        'theatre_id',
        'hall_id',
        'showtime_id',



    ];


    public function showtime()
    {
        return $this->belongsTo('App\Models\ShowTime','showtime_id');
    }

    public function hall()
    {
        return $this->belongsTo('App\Models\Hall','hall_id');
    }

    public function movie()
    {
        return $this->belongsTo('App\Models\Movie','movie_id');
    }

    public function theatre()
    {
        return $this->belongsTo('App\Models\Theatre','theatre_id');
    }

    public function showbooking()
    {
        return $this->hasMany('App\Models\ShowBooking');
    }



}

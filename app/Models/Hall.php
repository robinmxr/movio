<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $fillable=[
      'owner_id',
      'name',
      'adress',
      'description',
    ];



    public function owner()
    {
        return $this->belongsTo('App\Models\User','owner_id');
    }

    public function theatre()
    {
        return $this->hasMany('App\Models\Theatre');
    }


    public function booking()
    {
        return $this->hasMany('App\Models\Booking');
    }

}

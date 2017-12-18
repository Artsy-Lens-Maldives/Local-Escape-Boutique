<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $guarded = [];

    public function photos()
    {
        return $this->hasMany('App\RoomPhotos', 'room_id');
    }

    public function getFirstImageAttribute() {
        return $this->photos()->where('main', '1')->first();
    }
}

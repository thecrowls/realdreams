<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';

    public function hotelTranslation()
    {
        return $this->belongsTO('app\Models\hotelTranslation', 'hotel_id', 'id');
    }

}

class HotelTranslation extends Model {

    protected $table = 'hotel_translations';
    public $timestamps = false;
    protected $fillable = ['name','description', 'address', 'hotel_id'];

    public function hotel(){
        return $this->hasOne('app\Models\Hotel','hotel_id', 'id');
    }

}

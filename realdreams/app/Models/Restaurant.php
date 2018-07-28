<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';

    public function restaurantTranslation()
    {
        return $this->belongsTO('app\Models\restaurantTranslation', 'restaurant_id', 'id');
    }
}

class RestaurantTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['name', 'description', 'restaurant_id'];

    public function restaurant(){
        return $this->hasOne('app\Models\Restaurant','restaurant_id', 'id');
    }

}

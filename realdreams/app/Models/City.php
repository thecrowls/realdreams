<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';
    public $translatedAttributes = ['name'];
    protected $fillable = ['order'];

    public function tour()
    {
        return $this->belongsToMany('App\Models\Tour')
            ->withTimestamps();
    }

    public function cityTranslation()
    {
        return $this->belongsTO('app\Models\CityTranslation', 'city_id', 'id');
    }
}

class CityTranslation extends Model {

    protected $table = 'city_translations';
    public $timestamps = false;
    protected $fillable = ['name','city_id'];

    public function city(){
        return $this->hasOne('app\Models\City','city_id', 'id');
    }

}

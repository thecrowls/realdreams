<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = ['order'];

    public function countryTranslation()
    {
        return $this->belongsTO('app\Models\countryTranslation', 'country_id', 'id');
    }
}

class CountryTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['name','country_id'];
    public function country(){
        return $this->hasOne('app\Models\Country','country_id', 'id');
    }

}

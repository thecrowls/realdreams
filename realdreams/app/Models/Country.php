<?php

namespace App\Models;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Country extends Model
{
    use \Dimsav\Translatable\Translatable;

    protected $table = 'countries';
    public $translatedAttributes = ['name','locale'];
    public $fillable = ['order'];

    public function countryTranslation()
    {
        return $this->belongsTO('app\Models\countryTranslation', 'country_id', 'id');
    }
}

class CountryTranslation extends Model {

//    public $timestamps = false;
    protected $fillable = ['name','country_id','locale'];
    public function country(){
        return $this->hasOne('app\Models\Country','country_id', 'id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;

class Country extends Model
{
    protected $table = 'country';
    public $translatedAttributes = ['name'];
    protected $fillable = ['name'];
}

class CountryTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['name'];

}

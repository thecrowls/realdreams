<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sight extends Model
{
    protected $table = 'sights';

    public function sightTranslation()
    {
        return $this->belongsTO('app\Models\sightTranslation', 'sight_id', 'id');
    }
}

class CountryTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['name', 'description', 'address', 'sight_id'];

    public function sight(){
        return $this->hasOne('app\Models\Sight','sight_id', 'id');
    }

}

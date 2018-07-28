<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';

    public function city()
    {
        return $this->belongsToMany('App\Models\City')->withTimestamps();
    }

    public function tourTranslation()
    {
        return $this->belongsTO('app\Models\tourTranslation', 'tour_id', 'id');
    }
}

class TourTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['name','tour_id'];

    public function tour(){
        return $this->hasOne('app\Models\Tour','tour_id', 'id');
    }

}


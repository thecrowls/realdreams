<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = ['price','number_of_days','order'];
    protected $table = 'tours';

    public function cities()
    {
        return $this->belongsToMany('App\Models\City')->withTimestamps();
    }

    public function tourTranslation()
    {
        return $this->belongsTO('app\Models\TourTranslation', 'tour_id', 'id');
    }
}

class TourTranslation extends Model {

    protected $table = 'tour_translations';
//    public $timestamps = false;
    protected $fillable = ['name','tour_id'];

    public function tour(){
        return $this->hasOne('app\Models\Tour','tour_id', 'id');
    }

}


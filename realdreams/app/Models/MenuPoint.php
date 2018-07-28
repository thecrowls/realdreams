<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuPoint extends Model
{
    protected $table = 'menu_points';

    public function menuPointTranslation()
    {
        return $this->belongsTO('app\Models\menuPointTranslation', 'menu_point_id', 'id');
    }

}

class MenuPointTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['name','menu_point_id'];

    public function menuPoint(){
        return $this->hasOne('app\Models\MenuPoint','menu_point_id', 'id');
    }

}
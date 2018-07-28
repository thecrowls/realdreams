<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    protected $table = 'visa';

    public function visaTranslation()
    {
        return $this->belongsTO('app\Models\visaTranslation', 'visa_id', 'id');
    }
}

class VisaTranslation extends Model {
    public $timestamps = false;
    protected $fillable = ['name','visa_id'];

    public function visa(){
        return $this->hasOne('app\Models\Visa','visa_id', 'id');
    }

}


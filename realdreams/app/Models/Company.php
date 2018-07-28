<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    public $translatedAttributes = ['text'];
    protected $fillable = ['order','image'];

    public function companyTranslation()
    {
        return $this->belongsTO('app\Models\companyTranslation', 'company_id', 'id');
    }

}
class CompanyTranslation extends Model {

    protected $table = 'company_translations';
    public $timestamps = false;
    protected $fillable = ['text','company_id'];

    public function company(){
        return $this->hasOne('app\Models\Company','company_id', 'id');
    }

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    public $translatedAttributes = ['address'];
    protected $fillable = ['email','contact_phone','fax'];
    public function contactTranslation()
    {
        return $this->belongsTO('app\Models\contactTranslation', 'contact_id', 'id');
    }


}
class ContactTranslation extends Model {

    protected $table = 'contact_translations';
    public $timestamps = false;
    protected $fillable = ['address','contact_id'];

    public function company(){
        return $this->hasOne('app\Models\Contact','contact_id', 'id');
    }

}
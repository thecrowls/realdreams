<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'article';

    public $translatedAttributes = ['text','title','description'];
    protected $fillable = ['image','order'];

    public function articleTranslation()
    {
        return $this->belongsTO('app\Models\ArticleTranslation', 'article_id', 'id');
    }
}

class ArticleTranslation extends Model {

    protected $table = 'article_translations';
    public $timestamps = false;
    protected $fillable = ['text','title','description','article_id'];

    public function article(){
        return $this->hasOne('app\Models\Article','article_id', 'id');
    }

}
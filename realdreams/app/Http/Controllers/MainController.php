<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 01.08.2018
 * Time: 14:12
 */

namespace App\Http\Controllers;



use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;
use Jenssegers\Date\Date;

class MainController extends Controller
{

    public function index()
    {
        $locale = Lang::getLocale();
        Date::setLocale($locale);
        $company_info = DB::table('company_translations')->where('company_id',
            '1')->where('locale', $locale)->first();
        $articles = DB::table('articles')
            ->leftJoin('article_translations','articles.id', '=',
                'article_translations.article_id')
            ->where('article_translations.locale', $locale)
            ->orderBy('articles.created_at','desc')
            ->paginate(3);
        return view('index')->with('company_info', $company_info)->with('articles', $articles);
    }
}
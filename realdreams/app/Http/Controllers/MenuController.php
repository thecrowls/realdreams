<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 12.08.2018
 * Time: 0:15
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class MenuController extends Controller
{
    public function main_menu(){
        $locale = Lang::getLocale();
        $menu_points = DB::table('menu_points')
            ->leftJoin('menu_point_translations','menu_points.id', '=',
                'menu_point_translations.menu_point_id')
            ->where('menu_point_translations.locale', $locale)
            ->orderBy('menu_points.order');
        return view('header')->with('menu_points', $menu_points);

    }
}
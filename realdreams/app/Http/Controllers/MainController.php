<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 01.08.2018
 * Time: 14:12
 */

namespace App\Http\Controllers;


use App\Models\Company;

class MainController extends Controller
{

    public function index()
    {
        $company_info = Company::all();
        return view('index')->with('company_info', $company_info);
    }
}
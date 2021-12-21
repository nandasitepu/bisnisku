<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function rumahKost()
    {
        return view('pages\rumahKost');
    }

    public function ayundaFood()
    {
        return view('pages\ayundaFood');
    }

    public function ayundaStore()
    {
        return view('pages\ayundaStore');
    }
}

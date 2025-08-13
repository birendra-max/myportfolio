<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('inc/hd') . view('Home') . view('inc/foot');
    }
}

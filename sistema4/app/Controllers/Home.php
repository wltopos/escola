<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Home'
        ];
        return view('Home/index', $data);
    }
}

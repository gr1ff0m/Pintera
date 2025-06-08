<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        if(session()->get())

        return view('home', $data);
    }
}

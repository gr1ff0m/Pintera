<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Pintera'
        ];

        return view('welcome_message', $data);
    }
}

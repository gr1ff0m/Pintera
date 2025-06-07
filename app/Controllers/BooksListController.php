<?php

namespace App\Controllers;

class BooksListController extends BaseController
{
    public function index()
    {
        return view('BooksListPage');
    }
}


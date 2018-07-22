<?php

namespace Theme\Controllers;

use Themosis\Route\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view('pages.home');
    }
}

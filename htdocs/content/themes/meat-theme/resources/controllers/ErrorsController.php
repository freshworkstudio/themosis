<?php

namespace Theme\Controllers;

use Themosis\Route\BaseController;

class ErrorsController extends BaseController
{
    public function page404()
    {
        return view('errors.404');
    }
}

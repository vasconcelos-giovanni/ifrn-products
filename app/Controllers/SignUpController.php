<?php

namespace App\Controllers;

use App\View;

class SignUpController
{
    public function index()
    {
        return View::make('/Pages/sign-up/index');
    }
}
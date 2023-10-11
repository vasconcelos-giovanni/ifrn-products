<?php

namespace App\Controllers;

use App\View;

class SignInController
{
    public function index()
    {
        return View::make('/Pages/sign-in/index');
    }
}
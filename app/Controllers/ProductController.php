<?php

namespace App\Controllers;

use App\View;

class ProductController
{
    public function index()
    {
        return View::make('/Pages/products/index');
    }

    public function create()
    {
        return View::make('/Pages/products/create');
    }

    public function edit()
    {
        return View::make('/Pages/products/edit');
    }
}
<?php

namespace App\Controllers;

use App\View;

class ProductTypeController
{
    public function index()
    {
        return View::make('/Pages/product-types/index');
    }

    public function create()
    {
        return View::make('/Pages/product-types/create');
    }

    public function edit()
    {
        return View::make('/Pages/product-types/edit');
    }
}

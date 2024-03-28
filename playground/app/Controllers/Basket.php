<?php

namespace App\Controllers;

class Basket extends BaseController
{
    public function index(): string
    {
        return view('basket_message');
    }
}

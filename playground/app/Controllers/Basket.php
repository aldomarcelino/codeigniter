<?php

namespace App\Controllers;

class Basket extends BaseController
{
    public function index(): string
    {
        return view('v_basket');
    }
}

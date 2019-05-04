<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\ExchangeRate;
class LandingPageController extends Controller
{
    public function getIndex()
    {
        return view('index',['rate'=>ExchangeRate::getRates()]);
    }

    public function getCategory($id)
    {
        return view('category',['rate'=>ExchangeRate::getRates()]);
    }
}

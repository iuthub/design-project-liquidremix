<?php

namespace App\Http\Controllers;

use App\Custom\ExchangeRate;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function getAdmin(){
        return view('admin.index',['rate'=>ExchangeRate::getRates()]);
    }
}

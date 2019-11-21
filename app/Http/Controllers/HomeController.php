<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
            return view('demand-1');
    }
        public function demand2()
    {
            return view('demand-2');
    }
            public function demand3()
    {
            return view('demand-3');
    }
}
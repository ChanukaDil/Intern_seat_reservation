<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('pages.home.index');
    }
    public function res(){

        return view('pages.home.res');
    }
}

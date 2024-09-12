<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CRUD; // Import the CRUD model
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    public function index(){

        return view('pages.home.index');
    }
    public function res(){

        return view('pages.home.res');
    }
    public function login(){

        return view('login');
    }

}



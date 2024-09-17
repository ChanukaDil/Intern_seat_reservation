<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CRUD;

class CrudController extends Controller
{
    protected $task;
    public function __construct(){
        $this-> task = new CRUD();

    }

    public function index(){
        return view('pages.crud.index');
    }
    public function store(Request $request){
       $this ->task->create($request->all());
       return redirect()->route('login')->with('success', 'Registration successful. Please log in.');



    }

}

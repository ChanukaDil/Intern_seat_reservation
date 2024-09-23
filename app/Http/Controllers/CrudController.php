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
    public function store(Request $request)
{

    $validatedData = $request->validate([
        'Username' => 'required|string|max:255',
        'Password' => 'required|string|min:6',
        'Email' => 'required|email|max:255',
        'NIC' => 'required|string|max:12|min:10',
        'Birth' => 'required|integer|digits:4',
        'university' => 'required|string',
        'Uni_ID' => 'required|string|max:50',
        'Position' => 'required|string|max:100',
    ]);
    $validatedData['Password'] = bcrypt($validatedData['Password']);

    $this->task->create($validatedData);

    return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
}


}

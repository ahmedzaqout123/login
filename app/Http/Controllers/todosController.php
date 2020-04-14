<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todosController extends Controller
{
    //add method to get controller
    public function index(){

        return view('todos');
    }
}

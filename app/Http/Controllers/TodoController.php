<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Crud;

class TodoController extends Controller
{
    public function index()
    {
      $list = Crud::all();
      return view('List',['list'=>$list]);
    }
}

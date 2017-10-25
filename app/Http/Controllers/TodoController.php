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
    public function ftambah_data()
    {
      return view('Ftambah_data');
    }
    public function add(Request $request)
    {
      $list = new Crud();
      $list->jam = $request->jam;
      $list->nama_kegiatan = $request->kegiatan;
      $list->save();
      return redirect('/');
    }
    public function fedit_data($id)
    {
      $data = Crud::find($id);
      return view('Fedit_data',['data'=>$data]);
    }
    public function update(Request $request, $id)
    {
      $updatelist = Crud::find($id);
      $updatelist->jam = $request->jam;
      $updatelist->nama_kegiatan = $request->kegiatan;
      $updatelist->save();
      return redirect('/');
    }
}

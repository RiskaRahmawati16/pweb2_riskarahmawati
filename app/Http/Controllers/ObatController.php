<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;

class ObatController extends Controller
{
    function index(){
        //$data = obat::all(); //menampilkan seluruh data obat
        $data = obat::orderBy('id','asc')->paginate(5);
        return view('tabel')->with('data', $data);
    }

    function detail($id){
        $data = obat::where('id', $id)->first();
        return view('show')->with('data', $data);
    }

    function create(){
        return view('create');
        
    }

    function store(Request $request){
        obat::create($request->except(['_token','submit']));
        return redirect('tabel');
    }

    function edit($id){
        $data = obat::find($id);
        return view('edit', ['data'=> $data ]);
    }

    function update(Request $request, $id){
        $data = obat::findorfail($id);
        $data->update($request->except(['_token', 'submit']));
        return redirect('/tabel');
    }

    function destroy($id){
        obat::where('id', $id)->delete();
        return redirect('/tabel')->with('succes', 'Berhasil Hapus Data');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    //
    function index(){
        $data = siswa::all();
        return $data;
    }
    function detail($id)
    {
        return "<h1> Saya SISWA dari Controller dengan Id $id <h1/>";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelController extends Controller
{
   function index(){
    return view('tabel');
   }
}

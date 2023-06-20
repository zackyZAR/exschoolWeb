<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
       $siswa = siswa::all();
        return view('siswa', compact('siswa'));
    }
}

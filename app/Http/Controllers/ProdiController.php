<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function prodiMI(){
        return view('prodi.MI');
    }

    public function prodiTI(){
        return view('prodi.TI');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function sarana1(){
        return view('sarana.perkantoran');
    }

    public function sarana2(){
        return view('sarana.laboratorium');
    }

    public function sarana3(){
        return view('sarana.kelas');
    }

    public function sarana4(){
        return view('sarana.lainnya');
    }
}

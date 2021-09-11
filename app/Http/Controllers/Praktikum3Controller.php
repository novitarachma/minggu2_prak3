<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Praktikum3Controller extends Controller
{
    public function index(){
        return view("welcome");
    }

    public function home(){
        return 'Selamat datang di halaman website ini';
    }

    public function prodi($macam){
        return 'Prodi ku adalah '.$macam;
    }

    public function news($id){
        return 'Daftar berita ke- '.$id;
    }

    public function sarana($ruangan){
        return 'Halaman ini akan menampilkan terkait sarana '.$ruangan;
    }

    public function about(){
        return 'About us';
    }

    public function comment($nama, $pesan){
        return 'Namaku  '.$nama. ' saya ingin menyampaikan pesan '.$pesan;
    }

}


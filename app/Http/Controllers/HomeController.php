<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "2041720094, Safira Dyah Satiti, TI-2D";
    }

    public function articles($id){
        echo "Ini merupakan halaman dengan ID ".$id;
    }
}

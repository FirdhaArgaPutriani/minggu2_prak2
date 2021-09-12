<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "NIM &nbsp; : 2031710171<br>";
        echo "Nama : Firdha Arga Putriani"; 
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID '. $id; 
    }
}

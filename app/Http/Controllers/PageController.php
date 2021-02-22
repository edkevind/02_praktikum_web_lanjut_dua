<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        return "Lutfi_2041723009";
    }

    public function articles($id)
    {
        return "Halaman artikel dengan Id".$id;
    }

}

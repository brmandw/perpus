<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriBukuController extends Controller
{
    public function index()
    {
        return view("admin.kategoribuku.index");
    }

    public function indexPetugas()
    {
        return view("petugas.kategoribuku.index");
    }
}

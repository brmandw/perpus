<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPeminjamanController extends Controller
{
    public function index()
    {
        return view("admin.datapeminjaman.index");
    }

    public function indexPetugas()
    {
        return view("petugas.datapeminjaman.index");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

    public function indexPetugas()
    {
        return view("petugas.index");
    }
    public function indexPeminjam()
    {
        return view("peminjam.index");
    }
}

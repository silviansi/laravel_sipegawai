<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenKaryawanController extends Controller
{
    public function index(){
        return view('pages.manajemen-karyawan.index');
    }
    public function create(){
        return view('pages.manajemen-karyawan.create');
    }
}

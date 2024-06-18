<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index(){
        return view('pages.jabatan.index');
    }
    public function create(){
        return view('pages.jabatan.create');
    }
    public function edit(){
        return view('pages.jabatan.edit');
    }
}

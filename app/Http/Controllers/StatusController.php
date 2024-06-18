<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){
        return view('pages.status.index');
    }
    public function create(){
        return view('pages.status.create');
    }
    public function edit(){
        return view('pages.status.edit');
    }
}

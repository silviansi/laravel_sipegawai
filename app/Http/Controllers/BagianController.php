<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagianController extends Controller
{
    public function index() {
        return view('pages.bagian.index');
    }
    public function create() {
        return view('pages.bagian.create');
    }
    public function edit() {
        return view('pages.bagian.edit');
    }
}

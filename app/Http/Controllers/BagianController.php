<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use Illuminate\Http\Request;

class BagianController extends Controller
{
    public function index() {
        $bagians = Bagian::all();
        return view('pages.bagian.index', compact('bagians'));
    }
    public function create() {
        return view('pages.bagian.create');
    }
    public function store(Request $request) {
        $request->validate([
            'nama_bagian' => 'required'
        ]);
        
        $bagian = new Bagian();
        $bagian->nama_bagian = $request->nama_bagian;
        $bagian->save();

        return redirect()->route('bagian.index')->with('success', 'Data Bagian berhasil ditambahkan');
    }
    public function edit() {
        return view('pages.bagian.edit');
    }
    public function update(Request $request , $id) {
        $bagian = Bagian::find($id);

        if (!$bagian) {
            return redirect()->route('bagian.index')->with('error', 'Data bagian tidak ditemukan');
        }

        $request->validate([
            'nama_bagian' => 'required|string|max:255',
        ]);

        $bagian->nama_bagian = $request->input('nama_bagian');
        $bagian->save();

        return redirect()->route('bagian.index')->with('success', 'Data bagian berhasil diupdate');
        }
}

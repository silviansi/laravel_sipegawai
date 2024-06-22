<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index(){
        $jabatans = Jabatan::all();
        return view('pages.jabatan.index', compact('jabatans'));
    }
    public function create(){
        return view('pages.jabatan.create');
    }
    public function store(Request $request){
        $request->validate([
            'nama_jabatan' => 'required|string|max:255',
        ]);

        $jabatan = new Jabatan();
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->save();

        return redirect()->route('jabatan.index')->with('success', 'Data Jabatan berhasil ditambahkan');
    }
    public function edit(){
        return view('pages.jabatan.edit');
    }
    public function update(Request $request, $id){
        $jabatan = Jabatan::find($id);

        if(!$jabatan){
            return redirect()->route('jabatan.index')->with('error', 'Data jabatan tidak ditemukan');
        }

        $request->validate([
            'nama_jabatan' => 'required|string|max:255',
        ]);

        $jabatan->nama_jabatan = $request->input('nama_jabatan');
        $jabatan->save();

        return redirect()->route('jabatan.index')->with('success', 'Data jabatan berhasil diupdate');
    }
    public function destroy($id){
        $jabatan = Jabatan::findOrFail($id);

        $jabatan->delete();
        return response()->json(['message' => 'Data Jabatan berhasil dihapus']);
    }
}

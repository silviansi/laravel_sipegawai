<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){
        $statuses = Status::all();
        return view('pages.status.index', compact('statuses'));
    }
    public function create(){
        return view('pages.status.create');
    }
    public function store(Request $request){
        $request->validate([
            'nama_status' => 'required'
        ]);

        $status = new Status();
        $status->nama_status = $request->nama_status;
        $status->save();

        return redirect()->route('status.index')->with('success', 'Data Status berhasil ditambahkan');
    }
    public function edit(){
        return view('pages.status.edit');
    }
    public function update(Request $request, $id){
        $status = Status::find($id);

        if (!$status) {
            return redirect()->route('status.index')->with('error', 'Data status tidak ditemukan');
        }

        $request->validate([
            'nama_status' => 'required|string|max:255',
        ]);

        $status->nama_status = $request->input('nama_status');
        $status->save();

        return redirect()->route('status.index')->with('success', 'Data status berhasil diupdate');
    }
}

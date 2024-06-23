<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Models\Status;
use Illuminate\Http\Request;

class ManajemenPegawaiController extends Controller
{
    public function index(){
        $bagians = Bagian::all();
        $jabatans = Jabatan::all();
        $statuses = Status::all();
        $pegawais = Pegawai::all();
        return view('pages.manajemen-pegawai.index', compact('bagians', 'jabatans', 'statuses', 'pegawais'));
    }
    public function create(){
        $bagians = Bagian::all();
        $jabatans = Jabatan::all();
        $statuses = Status::all();
        return view('pages.manajemen-pegawai.create', compact('bagians', 'jabatans', 'statuses'));
    }
    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|integer|unique:pegawai',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|string',
            'tgl_lahir' => 'required|date',
            'no_telp' => 'required|string',
            'email' => 'required|email',
            'tgl_masuk_kerja' => 'required|date',
            'bagian_id' => 'required',
            'jabatan_id' => 'required',
            'status_id' => 'required',
        ]);

        $pegawai = new Pegawai();
        $pegawai->nama = $request->nama;
        $pegawai->nip = $request->nip;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->alamat = $request->alamat;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->no_telp = $request->no_telp;
        $pegawai->email = $request->email;
        $pegawai->tgl_masuk_kerja = $request->tgl_masuk_kerja;
        $pegawai->bagian_id = $request->bagian_id;
        $pegawai->jabatan_id = $request->jabatan_id;
        $pegawai->status_id = $request->status_id;
        $pegawai->save();

        return redirect()->route('pegawai.index')->with('success', 'Data Karyawan berhasil ditambahkan');
    
    }
    public function edit($id){
        $pegawai = Pegawai::findOrFail($id);
        $bagians = Bagian::where('id', '!=', $pegawai->bagian_id)->get();
        $jabatans = Jabatan::where('id', '!=', $pegawai->jabatan_id)->get();
        $statuses = Status::where('id', '!=', $pegawai->status_id)->get();
        return view('pages.manajemen-pegawai.edit', compact('pegawai', 'bagians', 'jabatans', 'statuses'));
    }
    public function update(Request $request, $id){
        $pegawai = Pegawai::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|integer|unique:pegawai,nip,' . $pegawai->id,
            'jenis_kelamin' => 'required',
            'alamat' => 'required|string',
            'tgl_lahir' => 'required|date',
            'no_telp' => 'required|string',
            'email' => 'required|email',
            'tgl_masuk_kerja' => 'required|date',
            'bagian_id' => 'required',
            'jabatan_id' => 'required',
            'status_id' => 'required',
        ]);

        $pegawai->nama = $request->input('nama');
        $pegawai->nip = $request->input('nip');
        $pegawai->jenis_kelamin = $request->input('jenis_kelamin');
        $pegawai->alamat = $request->input('alamat');
        $pegawai->tgl_lahir = $request->input('tgl_lahir');
        $pegawai->no_telp = $request->input('no_telp');
        $pegawai->email = $request->input('email');
        $pegawai->tgl_masuk_kerja = $request->input('tgl_masuk_kerja');
        $pegawai->bagian_id = $request->input('bagian_id');
        $pegawai->jabatan_id = $request->input('jabatan_id');
        $pegawai->status_id = $request->input('status_id');
        $pegawai->save();

        return redirect()->route('pegawai.index')->with('success', 'Data karyawan berhasil diupdate');
    }
    public function detail(){
        return view('pages.manajemen-pegawai.detail');
    }
    public function destroy($id){
        $pegawai = Pegawai::findOrFail($id);

        $pegawai->delete();
        return response()->json(['message' => 'Data Karyawan berhasil dihapus']);
    }
}

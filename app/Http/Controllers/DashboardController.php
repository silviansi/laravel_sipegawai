<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Models\Pegawai;
use App\Models\Status;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung total pegawai
        $totalPegawai = Pegawai::count();

        // Menghitung total pegawai yang aktif
        $totalPegawaiAktif = Pegawai::where('status_id', 1)->count();
        
        // Menghitung total pegawai yang cuti
        $totalPegawaiCuti = Pegawai::where('status_id', 3)->count();
        
        // Menghitung jumlah pegawai berdasarkan bagian
        $pegawaiPerBagian = Pegawai::selectRaw('bagian_id, count(*) as count')
            ->groupBy('bagian_id')
            ->pluck('count', 'bagian_id');
        
        // Mengambil nama bagian
        $bagians = Bagian::all()->pluck('nama_bagian', 'id');

        // Menghitung jumlah pegawai berdasarkan status
        $pegawaiPerStatus = Pegawai::selectRaw('status_id, count(*) as count')
            ->groupBy('status_id')
            ->pluck('count', 'status_id');
        
        // Mengambil nama status
        $statuses = Status::all()->pluck('nama_status', 'id');

        return view('dashboard', compact('totalPegawai', 'totalPegawaiAktif', 'totalPegawaiCuti', 'pegawaiPerBagian', 'bagians', 'pegawaiPerStatus', 'statuses'));
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $fillable = [
        'nama', 'nip','jenis_kelamin', 'alamat', 'tgl_lahir', 'no_telp', 'email', 'tgl_masuk_kerja', 'bagian_id', 'jabatan_id', 'status_id'
    ];
    public function bagian()
    {
        return $this->belongsTo(Bagian::class);
    }
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public $timestamps = false;
}

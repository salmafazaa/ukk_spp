<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $fillable = [
        'nisn',
        'nis',
        'nama',
        'alamat',
        'no_telp',
        'kelas_id',
        'spps_id'
    ];

    public function kelas()
    {
        return $this->belongsTo('App\Models\Kelas','id','kelas_id');
    }

    public function spp()
    {
        return $this->belongsTo('App\Models\Spps','id','spps_id');
    }
    public function Pembayaran()
    {
        return $this->hasMany('App\Models\Pembayaran');
    }
}
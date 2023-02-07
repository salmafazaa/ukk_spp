<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table= 'siswa';
    protected $fillabe= [
        'nisn',
        'nis',
        'nama',
        'alamat',
        'no_telp',

    ];
}
public function kelas()
{
    return $this->belongsTo('App\Models\kelas', 'id', 'kelas_id');
}


public function spp()
{
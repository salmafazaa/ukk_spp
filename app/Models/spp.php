<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp extends Model
{
    use HasFactory;
    protected $table= 'spp';
    protected $fillabel= [
        'tahun',
        'nominal',
    ];
    public function kelas()
    {
        return $this ->belongsTo('App\models\kelas','id', 'kelas_id');

    }
}




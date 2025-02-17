<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $primaryKey = 'nik';
    protected $fillable = [
        'nik', 
        'nama_lengkap', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'jenis_kelamin', 
        'alamat', 
        'agama', 
        'nomor_telepon', 
        'status', 
        'pekerjaan', 
        'kewarganegaraan', 
        'domisili', 
    ];
}


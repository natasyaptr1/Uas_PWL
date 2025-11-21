<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    public $timestamps = true;

    protected $fillable = [
        'nama_kelas',
        'kategori',
        'spp',
        'kuota_maks',
    ];

    // Relasi: Satu Kelas memiliki banyak Reservasi Privat
    public function reservasiPrivats()
    {
        return $this->hasMany(ReservasiPrivat::class, 'id_kelas', 'id_kelas');
    }

    // Relasi: Satu Kelas memiliki banyak Absensi
    public function absensis()
    {
        return $this->hasMany(Absensi::class, 'id_kelas', 'id_kelas');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservasiPrivat extends Model
{
    use HasFactory;

    protected $table = 'reservasi_privat';
    protected $primaryKey = 'id_reservasi';
    public $timestamps = true;

    protected $fillable = [
        'id_member',
        'id_kelas',
        'tgl_sesi',
        'jam_sesi',
        'status',
    ];

    // Relasi: Satu Reservasi milik satu Member
    public function member()
    {
        return $this->belongsTo(Member::class, 'id_member', 'id_member');
    }

    // Relasi: Satu Reservasi milik satu Kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id_kelas');
    }
}

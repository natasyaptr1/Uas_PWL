<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';
    protected $primaryKey = 'id_absensi';
    public $timestamps = true;

    protected $fillable = [
        'id_member',
        'id_kelas',
        'tgl_masuk',
        'jam_masuk',
        'jam_keluar',
    ];

    // Relasi: Satu Absensi milik satu Member
    public function member()
    {
        return $this->belongsTo(Member::class, 'id_member', 'id_member');
    }

    // Relasi: Satu Absensi milik satu Kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id_kelas');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'member';
    protected $primaryKey = 'id_member';
    public $timestamps = true;

    protected $fillable = [
        'id_user',
        'nama_anak',
        'nama_ortu',
        'tgl_lahir',
        'alamat',
        'no_hp',
        'tujuan_masuk',
    ];

    // Relasi: Satu Member milik satu User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    // Relasi: Satu Member memiliki banyak Trial
    public function trials()
    {
        return $this->hasMany(Trial::class, 'id_member', 'id_member');
    }

    // Relasi: Satu Member memiliki banyak Reservasi Privat
    public function reservasiPrivats()
    {
        return $this->hasMany(ReservasiPrivat::class, 'id_member', 'id_member');
    }

    // Relasi: Satu Member memiliki banyak Pembayaran
    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'id_member', 'id_member');
    }

    // Relasi: Satu Member memiliki banyak Absensi
    public function absensis()
    {
        return $this->hasMany(Absensi::class, 'id_member', 'id_member');
    }

    // Relasi: Satu Member memiliki satu Masa Tunggu (jika ada)
    public function masaTunggu()
    {
        return $this->hasOne(MasaTunggu::class, 'id_member', 'id_member');
    }
}

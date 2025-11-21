<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    public $timestamps = true;

    protected $fillable = [
        'id_member',
        'tgl_bayar',
        'metode_bayar',
        'jumlah',
        'status_bayar',
        'jenis_bayar',
    ];

    // Relasi: Satu Pembayaran milik satu Member
    public function member()
    {
        return $this->belongsTo(Member::class, 'id_member', 'id_member');
    }
}

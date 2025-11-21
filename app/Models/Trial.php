<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trial extends Model
{
    use HasFactory;

    protected $table = 'trial';
    protected $primaryKey = 'id_trial';
    public $timestamps = true;

    protected $fillable = [
        'id_member',
        'tgl_permintaan',
        'tgl_sesi_trial',
        'status_trial',
    ];

    // Relasi: Satu Trial milik satu Member
    public function member()
    {
        return $this->belongsTo(Member::class, 'id_member', 'id_member');
    }
}

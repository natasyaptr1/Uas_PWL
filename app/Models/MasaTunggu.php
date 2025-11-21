<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasaTunggu extends Model
{
    use HasFactory;

    protected $table = 'masa_tunggu';
    protected $primaryKey = 'id_masa_tunggu';
    public $timestamps = true;

    protected $fillable = [
        'id_member',
        'tgl_tidak_lanjut',
        'tgl_boleh_trial_lagi',
    ];

    // Relasi: Satu Masa Tunggu milik satu Member
    public function member()
    {
        return $this->belongsTo(Member::class, 'id_member', 'id_member');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    public $timestamps = true;

    protected $fillable = [
        'id_user',
        'nama',
    ];

    // Relasi: Satu Admin milik satu User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}

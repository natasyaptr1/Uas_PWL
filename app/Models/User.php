<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // --- ID KUSTOM ---
    protected $primaryKey = 'id_user';
    // Timestamps otomatis diaktifkan (default true)

    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
        // 'remember_token' tidak perlu di fillable karena dikelola otomatis
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Tambahkan relasi ini:
    public function member()
    {
        // User (Wali Murid) memiliki SATU data Member (Murid/Anak)
        // Relasi menggunakan kolom 'id_user' di tabel 'member' dan 'id_user' di tabel 'users'
        return $this->hasOne(Member::class, 'id_user', 'id_user');
    }

}


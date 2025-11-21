<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable // atau bisa juga Model biasa jika tidak digunakan untuk auth
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id_user';
    public $timestamps = true; // Karena migrasi kita menyertakan timestamps

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relasi: Satu User adalah satu Admin
    public function admin()
    {
        return $this->hasOne(Admin::class, 'id_user', 'id_user');
    }

    // Relasi: Satu User adalah satu Member
    public function member()
    {
        return $this->hasOne(Member::class, 'id_user', 'id_user');
    }
}

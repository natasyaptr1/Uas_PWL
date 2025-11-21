<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user'); // Primary Key
            $table->string('username', 50)->unique(); // nama pengguna untuk login
            $table->string('password'); // kata sandi terenkripsi
            $table->enum('role', ['Admin', 'Member']); // peran pengguna
            $table->rememberToken(); // untuk Laravel Sanctum atau fitur 'Remember Me'
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

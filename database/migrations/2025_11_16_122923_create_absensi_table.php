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
        Schema::create('absensi', function (Blueprint $table) {
            $table->id('id_absensi'); // primary key
            $table->foreignId('id_member')->constrained('member', 'id_member')->onDelete('cascade'); // FK ke member
            $table->foreignId('id_kelas')->constrained('kelas', 'id_kelas')->onDelete('cascade'); // FK ke kelas
            $table->date('tgl_masuk'); // tanggal kehadiran
            $table->time('jam_masuk')->nullable(); // waktu scan masuk (opsional)
            $table->time('jam_keluar')->nullable(); // waktu scan keluar (opsional)
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi');
    }
};

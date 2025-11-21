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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id('id_kelas'); // primary Key
            $table->enum('nama_kelas', ['Artistik', 'Ritmik']); // jenis kelas
            $table->enum('kategori', ['Rekreasi', 'Reguler', 'Prestasi']); // kategori kelas
            $table->decimal('spp', 10, 0); // biaya SPP bulanan
            $table->integer('kuota_maks')->default(10); // kuota maksimal per sesi, default 10
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};

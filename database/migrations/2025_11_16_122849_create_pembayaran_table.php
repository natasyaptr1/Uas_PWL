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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran'); // primary key
            $table->foreignId('id_member')->constrained('member', 'id_member')->onDelete('cascade'); // FK ke member
            $table->timestamp('tgl_bayar'); // tanggal dan waktu pembayaran
            $table->enum('metode_bayar', ['Transfer', 'Cash']); // metode pembayaran
            $table->decimal('jumlah', 10, 0); // jumlah uang yang dibayarkan
            $table->enum('status_bayar', ['DP', 'Lunas', 'Menunggu Verifikasi'])->default('Menunggu Verifikasi'); // status pembayaran
            $table->enum('jenis_bayar', ['SPP', 'Pendaftaran']); // jenis pembayaran
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};

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
        Schema::create('trial', function (Blueprint $table) {
            $table->id('id_trial'); // primary key
            $table->foreignId('id_member')->constrained('member', 'id_member')->onDelete('cascade'); // FK ke member
            $table->timestamp('tgl_permintaan'); // waktu member meminta trial
            $table->timestamp('tgl_sesi_trial')->nullable(); // jadwal sesi trial
            $table->enum('status_trial', ['Menunggu', 'Hadir', 'Selesai'])->default('Menunggu'); // status trial
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trial');
    }
};

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
        Schema::create('masa_tunggu', function (Blueprint $table) {
            $table->id('id_masa_tunggu'); // primary key
            $table->foreignId('id_member')->constrained('member', 'id_member')->onDelete('cascade'); // FK ke member
            $table->date('tgl_tidak_lanjut'); // tanggal member memilih 'Tidak Lanjut'
            $table->date('tgl_boleh_trial_lagi'); // tanggal masa tunggu berakhir
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masa_tunggu');
    }
};

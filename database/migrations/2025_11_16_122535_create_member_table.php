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
        Schema::create('member', function (Blueprint $table) {
            $table->id('id_member'); // primary key
            $table->foreignId('id_user')->constrained('users', 'id_user')->onDelete('cascade'); // FK ke users
            $table->string('nama_anak', 100);
            $table->string('nama_ortu', 100);
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('no_hp', 15);
            $table->string('tujuan_masuk', 50); // misal: 'Prestasi', 'Olahraga'
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member');
    }
};

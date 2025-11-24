<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; // Pastikan Carbon diimpor

class MemberController extends Controller
{
    // ... (method create tetap sama)

    public function store(Request $request)
    {
        $user = Auth::user();

        // Validasi data
        $validatedData = $request->validate([
            'nama_anak' => 'required|string|max:100',
            'nama_ortu' => 'required|string|max:100',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'tujuan_masuk' => 'required|string|max:50',
        ]);

        // --- LOGIKA HITUNG UMUR OTOMATIS ---
        $birthDate = Carbon::parse($validatedData['tgl_lahir']);
        $age = $birthDate->age; // Menghitung selisih tahun dari hari ini
        // ------------------------------------

        // Cari atau buat baru data Member melalui relasi user
        $member = $user->member()->firstOrNew();

        // Isi data dari request
        $member->fill($validatedData);

        // TAMBAHKAN KOLOM USIA (asumsi Anda punya kolom 'usia' di tabel 'member')
        // *Jika Anda memiliki kolom 'usia' di tabel 'member', pastikan ia diizinkan NULL
        $member->usia = $age;

        $member->save();

        return redirect()->route('member.create')->with('success', 'Data Member berhasil disimpan.');
    }
}

@extends('layouts.app')

@section('title', 'Informasi Data Member')

@section('content')

<style>
    /* Styling Dasar, sesuaikan dengan app.blade.php Anda */
    .form-container {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        padding: 30px 40px;
        max-width: 900px;
        margin: 40px auto;
        border: 1px solid #e0ee;
    }
    .form-header {
        text-align: center;
        margin-bottom: 30px;
        color: #2b3a7b;
        font-size: 24px;
        font-weight: bold;
    }
    .form-row {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
    }
    .form-group {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .form-group label {
        font-weight: bold;
        margin-bottom: 8px;
        color: #333;
        font-size: 14px;
    }
    .form-group input, .form-group select, .form-group textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #dcdfe6;
        border-radius: 8px;
        font-size: 15px;
        color: #333;
    }
    .form-actions {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 30px;
    }
    .btn {
        padding: 12px 30px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
    }
    .btn-cancel {
        background-color: #f8d7da;
        color: #721c24;
    }
    .btn-save {
        background-color: #0C8D9A;
        color: #fff;
    }
    .success-popup {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 8px;
        text-align: center;
    }
    @media (max-width: 768px) {
        .form-row {
            flex-direction: column;
            gap: 0;
        }
    }
</style>

<div class="form-container">
    <h1 class="form-header">INFORMASI DATA MEMBER</h1>

    <form action="{{ route('member.store') }}" method="POST">
        @csrf

        {{-- Pesan Sukses --}}
        @if (session('success'))
            <div class="success-popup">
                {{ session('success') }}
            </div>
        @endif

        {{-- Pesan Error Validasi --}}
        @if ($errors->any())
            <div style="background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 15px; margin-bottom: 20px; border-radius: 8px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @php
            // Memastikan variabel $member ada, jika belum diinisialisasi
            $member = $member ?? new \App\Models\Member();
        @endphp

        {{-- Row 1: Nama Anak & Nama Ortu --}}
        <div class="form-row">
            <div class="form-group">
                <label for="nama_anak">Nama Anak</label>
                <input type="text" name="nama_anak" id="nama_anak" placeholder="Masukkan Nama Anak" value="{{ old('nama_anak', $member->nama_anak) }}" required>
            </div>
            <div class="form-group">
                <label for="nama_ortu">Nama Orang Tua</label>
                <input type="text" name="nama_ortu" id="nama_ortu" placeholder="Masukkan Nama Orang Tua" value="{{ old('nama_ortu', $member->nama_ortu) }}" required>
            </div>
        </div>

        {{-- Row 2: Tanggal Lahir & Tujuan Masuk --}}
        <div class="form-row">
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir Anak</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ old('tgl_lahir', $member->tgl_lahir) }}" required>
            </div>
            <div class="form-group">
                <label for="tujuan_masuk">Tujuan Masuk</label>
                <select name="tujuan_masuk" id="tujuan_masuk" required>
                    <option value="">Pilih Tujuan Masuk</option>
                    <option value="Prestasi" {{ old('tujuan_masuk', $member->tujuan_masuk) == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                    <option value="Rekreasi" {{ old('tujuan_masuk', $member->tujuan_masuk) == 'Rekreasi' ? 'selected' : '' }}>Rekreasi</option>
                    <option value="Kebugaran" {{ old('tujuan_masuk', $member->tujuan_masuk) == 'Kebugaran' ? 'selected' : '' }}>Kebugaran</option>
                </select>
            </div>
        </div>

        {{-- Row 3: Nomor HP --}}
        <div class="form-row">
             <div class="form-group">
                <label for="no_hp">Nomor HP Aktif (Wali Murid)</label>
                <input type="text" name="no_hp" id="no_hp" placeholder="Masukkan Nomor HP" value="{{ old('no_hp', $member->no_hp) }}" required>
            </div>
             <div class="form-group">
                 {{-- Kolom kosong untuk layout simetris --}}
             </div>
        </div>

        {{-- Row 4: Alamat --}}
        <div class="form-group">
            <label for="alamat">Alamat Lengkap</label>
            <textarea name="alamat" id="alamat" rows="3" placeholder="Masukkan Alamat Lengkap Rumah" required>{{ old('alamat', $member->alamat) }}</textarea>
        </div>


        <div class="form-actions">
            <button type="button" class="btn btn-cancel" onclick="window.history.back()">Batal</button>
            <button type="submit" class="btn btn-save">Simpan</button>
        </div>
    </form>
</div>

@endsection

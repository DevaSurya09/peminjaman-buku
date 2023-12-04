@extends('layout.navigation')
@section('title', 'halaman home')

@section('content')
<div class="body">
    <img src="{{ asset('download.jpeg') }}" alt="Deskripsi Gambar">
    <div class="create">
        <form action="/peminjam" method="post">
            @csrf
            <label for="nama_peminjam">Nama peminjam</label>
            <input id="input" type="text" name="nama_peminjam" id="nama_peminjam" maxlength="50" placeholder="Nama peminjam"
                class="{{ $errors->has('nama_peminjam') ? 'error' : '' }}" value="{{ old('nama_peminjam') }}" required>

            <label for="judul_buku">Judul buku</label>
            <div class="drop-down">
                <select name="judul_buku" id="judul_buku" class="{{ $errors->has('judul_buku') ? 'error' : '' }}">
                <option value="Bahasa Indonesia" {{ old('judul_buku') == 'Bahasa Indonesia' ? 'selected' : '' }}>Bahasa Indonesia</option>
                <option value="Bahasa Inggris" {{ old('judul_buku') == 'Bahasa Inggris' ? 'selected' : '' }}>Bahasa Inggris</option>
                <option value="Matematika" {{ old('judul_buku') == 'Matematika' ? 'selected' : '' }}>Matematika</option>
                <option value="PPKN" {{ old('judul_buku') == 'PPKN' ? 'selected' : '' }}>PPKN</option>
            </select>
            </div>


            <label for="tanggal">Tanggal peminjaman</label>
            <input id="input" type="date" name="tanggal" id="tanggal"
                class="{{ $errors->has('tanggal') ? 'error' : '' }}" value="{{ old('tanggal') }}" required>

            <div class="create-submit">
                @if ($errors->any())
                    <div class="validasi">Form tidak boleh kosong.</div>
                @endif
                <input id="create" type="submit" name="submit" value="Tambah">
            </div>
        </form>
    </div>
</div>

    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .body img[src$='download.jpeg'] {
            opacity: .15;
            height: 100%;
            object-fit: cover;
            width: 83%;
            position: absolute;
            right: 0;
        }

        .create {
            position: relative;
            margin-left: 23%;
            padding-top: 3%;
        }

        .create form label {
            margin-top: 10px;
        }

        .create form input {
            height: 40px;
            caret-color: rgb(255, 255, 255);
        }

        #input {
            border-radius: 8px;
            padding: 0 20px;
            background-color: #000000;
            color: white;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid rgb(145, 145, 145);
        }
        .drop-down{
            height: 40px;
            border-radius: 8px;
            padding: 0 20px;
            background-color: #000000;
            color: white;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid rgb(145, 145, 145);
        }
        select{
            height: 100%;
            width: 100%;
            background-color: #000000;
            color: white;
            border: none;
        }
        .drop-down select:focus {
    outline: none;
    border: none;
        }

        label {
            color: white;
            margin: 0 20px;
        }

        .create form {
            display: flex;
            flex-direction: column;
            text-align: left;
            width: 95%;
        }

        #input::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }

        .error {
            border: 1px solid red;
        }

        .validasi {
            color: red;
        }

        #create {
            height: 40px;
            width: 70%;
            border-radius: 8px;
            background-color: rgb(61, 116, 178);
            color: rgb(0, 0, 0);
            font-weight: bold;
            box-shadow: 3px 3px 4px black;
            transition: 0.3s ease;
            cursor: pointer;
        }

        .create-submit {
            display: flex;
            margin-top: 30px;
            flex-direction: column;
            align-items: center;
        }
    </style>
@endsection

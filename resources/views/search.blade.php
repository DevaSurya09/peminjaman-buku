@extends('layout.navigation')
@section('title', 'halaman home')

@section('content')
    <div class="body">
        <img src="{{ asset('download.jpeg') }}" alt="Deskripsi Gambar">
        <div class="home-content">
            <div class="contents">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="4">
                                <div class="top-contents">
                                    <a href="/createdata/create">
                                        <div class="action-buttons">
                                            <h1>+</h1>
                                            <p>Tambah data</p>
                                        </div>
                                    </a>
                                    <div class="search">
                                        <form action="/search" method="GET">
                                            <input id="search" type="text" name="query" placeholder="Cari nama..." value="{{ $query }}">
                                            <button id="search-button" type="submit">Cari</button>
                                        </form>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="heading-table">
                            <td>Nama Peminjam</td>
                            <td>Judul Buku</td>
                            <td>Tanggal Peminjaman</td>
                            <td></td>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->nama_peminjam }}</td>
                                <td>{{ $post->judul_buku }}</td>
                                <td class="{{ strtotime($post->tanggal) < strtotime('-7 days') ? 'expired-date' : '' }}">
                                    {{ $post->tanggal }}</td>
                                <td>
                                    <div class="button">
                                        <form action="/peminjam/{{ $post->id }}/edit" method="GET">
                                            <input id="update" type="submit" name="submit" value="Edit">
                                        </form>
                                        <form action="/peminjam/{{ $post->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input id="delete" type="submit" name="submit" value="Hapus"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus peminjam {{ $post->nama_peminjam }}?')">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pagination">
            <ul class="pagination-list">
                {{-- @if ($posts->currentPage() > 1) --}}
                <li class="page-item">
                    <a href="{{ $posts->previousPageUrl() }}" class="page-link">&laquo; Kembali</a>
                </li>
                {{-- @endif --}}

                @for ($i = 1; $i <= $posts->lastPage(); $i++)
                    <li class="page-item {{ $i == $posts->currentPage() ? 'active' : '' }}">
                        <a href="{{ $posts->url($i) }}" class="page-link">{{ $i }}</a>
                    </li>
                @endfor

                {{-- @if ($posts->currentPage() < $posts->lastPage()) --}}
                <li class="page-item">
                    <a href="{{ $posts->nextPageUrl() }}" class="page-link">Berikutnya &raquo;</a>
                </li>
                {{-- @endif --}}
            </ul>
        </div>
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap');

        * {
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }

        .home-content {
            position: relative;
            margin-left: 23%;
            padding-top: 2%;
        }

        .body img[src$='download.jpeg'] {
            opacity: .15;
            height: 100%;
            object-fit: cover;
            width: 83%;
            position: absolute;
            right: 0;
        }

        .top-contents {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* width: 92%; */
            /* margin-left: 55px; */
        }

        .action-buttons {
            background: rgb(104, 147, 197);
            color: rgb(0, 0, 0);
            width: 50px;
            height: 50px;
            overflow: hidden;
            display: flex;
            align-items: center;
            border-radius: 35px;
            box-shadow: 3px 3px 4px black;
            transition: all .2s ease;
        }

        .action-buttons:hover {
            width: 200px;
            border-radius: 35px;
        }

        .action-buttons h1 {
            font-size: 45px;
            margin: 12px;
            transition: all .2s ease;
        }

        .action-buttons:hover h1 {
            transform: rotate(90deg)
        }

        .search {
            text-align: right;
        }

        #search {
            border-radius: 8px 0px 0px 8px;
            padding: 5px 10px;
            background-color: #000000;
            color: white;
            margin-top: 5px;
            border: 1px solid rgb(145, 145, 145);
        }

        .contents {
            display: flex;
            background-color: transparent;
            width: 92%;
            padding: 5px 10px;
            margin: 10px 0;
        }

        #search-button {
            padding: 5px 10px;
            background-color: rgb(104, 147, 197);
            color: rgb(0, 0, 0);
            border-radius: 0 8px 8px 0;
            border: none;
            font-weight: bold;
            box-shadow: 3px 3px 4px black;
            transition: 0.3s ease;
            cursor: pointer;
            border: 1px solid rgb(104, 147, 197);
        }

        #search-button:hover {
            box-shadow: 0px 0px 0px black;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            color: rgb(255, 255, 255);
        }

        .heading-table {
            font-weight: 900;
        }

        td {
            padding: 8px;
            border-bottom: 1px solid #848484;
            text-align: center;
        }

        th {
            padding-bottom: 20px;
        }

        .button {
            display: flex;
            justify-content: center
        }

        .button form {
            margin: 3% 4%;
        }

        #update {
            padding: 5px 10px;
            background-color: rgb(104, 147, 197);
            color: rgb(0, 0, 0);
            border-radius: 5px;
            border: none;
            font-weight: bold;
            box-shadow: 3px 3px 4px black;
            transition: 0.2s ease;
            cursor: pointer;
        }

        #update:hover {
            box-shadow: 0px 0px 0px black;
        }

        #delete {
            padding: 5px 10px;
            background-color: rgb(198, 69, 69);
            color: rgb(0, 0, 0);
            border-radius: 5px;
            border: none;
            font-weight: bold;
            box-shadow: 3px 3px 4px black;
            transition: 0.3s ease;
            cursor: pointer;
        }

        #delete:hover {
            box-shadow: 0px 0px 0px black;
        }

        .expired-date {
            color: red;
        }

        /* pagination */
        .pagination {
            margin-left: 9%;
            position: fixed;
            bottom: 50px;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .pagination .pagination-list {
            list-style: none;
            display: flex;
            gap: 10px;
        }

        .pagination .pagination-list .page-item {
            background-color: rgb(104, 147, 197);
            color: white;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
            cursor: pointer;
            box-shadow: 3px 3px 4px black;
            transition: 0.2s ease;
        }

        .pagination .pagination-list .page-item:hover {
            background-color: rgb(104, 147, 197);
            box-shadow: 0px 0px 0px black;
        }

        .pagination .pagination-list .page-item.active {
            background-color: #333;
        }

        .pagination .pagination-list .page-item.disabled {
            background-color: #ddd;
            color: #aaa;
            cursor: not-allowed;
        }

        .pagination .pagination-list .page-item.active a {
            color: white;
            font-weight: bold;
        }

        .pagination .pagination-list .page-item a {
            color: rgb(0, 0, 0);
            font-weight: bold;
        }
    </style>

@endsection

@extends('layout.navigation')
@section('title', 'halaman home')

@section('content')
    <div class="body">
        <img src="{{ asset('download.jpeg') }}" alt="Deskripsi Gambar">
        <div class="book-home">
            @foreach ($gambarArray as $gambar)
                <a href="/book/{{ $gambar['id'] }}">
                    <div class="box">
                        <img src="{{ asset($gambar['gambar']) }}" alt="Deskripsi Gambar">
                        <div class="info">
                            <h1>{{ $gambar['title'] }}</h1>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <style>
        .body {
            margin-left: 20%;
            padding-top: 3%;
        }

        .body img[src$='download.jpeg'] {
            opacity: .15;
            height: 100%;
            object-fit: cover;
            width: 83%;
            position: absolute;
            right: 0;
        }

        .book-home {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;

            /* width: 77%; */
        }

        * {
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }

        /* .book-home {
                margin-left: 23%;
                padding-top: 3%;
                width: 77%;
            } */

        .box {
            border: 1px solid rgb(68, 68, 68);
            width: 210px;
            height: 297px;
            border-radius: 3%;
            position: relative;
            overflow: hidden;
            display: inline-block;
            margin-right: 15px;
            box-shadow: 3px 3px 8px rgb(0, 0, 0);

        }

        .box img {
            width: 210px;
            height: 297px;
            transition: all .5s ease;
        }

        .box img:hover {

            transform: scale(1.1);
        }

        .box .info {
            background: rgba(0, 0, 0, .7);
            width: 100%;
            height: 90px;
            position: absolute;
            bottom: -45px;
            transition: all .5s ease;
            z-index: 1;
            color: white
        }

        .box:hover .info {
            bottom: 0px;
        }
    </style>
@endsection

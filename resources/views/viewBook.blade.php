@extends('layout.navigation')
@section('title', 'halaman home')

@section('content')
<div class="body">
    <img src="{{ asset('download.jpeg') }}" alt="Deskripsi Gambar">
    <div class="book-home">
        <div class="box">
            <img src="{{ asset($gambar['gambar']) }}" alt="Deskripsi Gambar">
            <div class="scroll">
                <div class="a">

                    <h1>{{ $gambar['title'] }}</h1>
                    <p>{{ $gambar['desc'] }}</p>
                </div>

            </div>
        </div>
    </div>
</div>
    <style>
        * {
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }
        .body{
/* margin-left: 20%; */
            /* padding-top: 3%; */
        }
        .body img[src$='download.jpeg']{
        opacity: .15;
        height: 100%;
            object-fit: cover;
            width: 83%;
            position: absolute;
            right: 0;
    }

        .book-home {
            position: relative;
            display: flex;
            margin-left: 23%;
            margin-right: 10%;
            /* padding-top: 3%; */
            /* justify-content: center; */
            align-items: center;
            height: 100vh;
            /* width: 76vh; */

        }

        .box {
            display: flex;
            text-align: center;
            align-items: center;
            height: 100vh;

        }

        .box img {
            width: 420px;
            height: 594px;
            margin-right: 2%;
            border-radius: 3%;
            box-shadow: 3px 3px 8px rgb(0, 0, 0);
        }

        .box .scroll {
            text-align: left;
            color: white;
            max-height: 25em;
            overflow-y: auto;
        }

        .scroll::-webkit-scrollbar {
            width: 12px;
            /* Lebar scrollbar */
        }

        .scroll::-webkit-scrollbar-track {
            background-color: #f1f1f1;
            border-radius: 6px;
            /* Warna latar belakang track scrollbar */
        }

        .scroll::-webkit-scrollbar-thumb {
            background-color: #888;
            /* Warna thumb scrollbar */
            border-radius: 6px;
            /* Bentuk thumb scrollbar */
        }

        .box .scroll h1 {
            font-size: 60px;
            border-bottom: 2px solid white;
        }

        .box .scroll p {
            font-size: 20px;
        }
        .a{
            margin-right: 20px;
        }
    </style>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <div class="side_bar">
        <img src="{{ asset('blue.jpg') }}" alt="Deskripsi Gambar">
        <nav class="sidebar">
            <ul>
                <h1>Perpustakaan</h1>
                <li><a href="/"><i class='bx bx-home' ></i> Home</a></li>
                <li><a href="/peminjam"><i class='bx bx-user' ></i> Peminjam</a></li>
                {{-- <a href="/createdata/create">Tambah data</a> --}}
                <li><a href="/book"><i class='bx bx-book'></i> Buku</a></li>
                {{-- <a href="/login/false">Logout</a> --}}

                <form action="/login/false">
                    @csrf

                    <button id="logout" onclick="return confirm('Apakah Anda yakin ingin logout?')"><i class='bx bx-log-out'></i> Logout</button>
                </form>

            </ul>
        </nav>
    </div>
    @yield('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap');

        :root {
            --blue: #6893c5;
        }

        .side_bar h1 {
            border-bottom: 2px solid #ffffff;
            padding-bottom: 10px;
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        body {
            background-color: #161731;
            overflow: hidden;
        }

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: content-box;
            list-style: none;
        }

        .side_bar {
            z-index: 9999;
            position: fixed;
            height: 100%;
            width: 20%;
            background-color: #050222;
            /* padding-top: 20px; */
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
            box-shadow: 4px 1px 26px #000000;
            border-right: 2px solid #6893c5;
            ;
        }

        .sidebar {
            padding-top: 20%;
            display: flex;
            flex-direction: column;
            align-items: left;
            position: absolute;
            color: #ffffff;
        }

        .sidebar h1 {
            margin-bottom: 10px
        }

        /* .sidebar a {
            text-decoration: none;
            margin: 5px 0;
            font-size: 20px;
            color: rgb(255, 255, 255);
            transition: .4s;
        }
        .sidebar a:hover {
            border-bottom: 2px solid white;
        } */
        i {
            margin-right: 10px;
        }
        .sidebar a {
    text-decoration: none;
    margin: 8px 0;
    font-size: 20px;
    color: rgb(255, 255, 255);
    position: relative;
    transition: box-shadow 0.4s ease; /* Efek transisi untuk box-shadow */
    display: inline-block;
}

.sidebar a:hover {
    box-shadow: 0 2px 0 0 white; /* Efek garis bawah saat dihover */
}

        .side_bar img {
            height: 100%;
            object-fit: cover;
            width: 100%;
            opacity: .45;
        }

        #logout {
            text-decoration: none;
            margin: 5px 0;
            font-size: 20px;
            color: rgb(255, 255, 255);
            background: transparent;
            border: none;
            transition: box-shadow 0.4s ease; /* Efek transisi untuk box-shadow */
    display: inline-block;
    cursor: pointer;
        }
        #logout:hover{
            box-shadow: 0 2px 0 0 white;
        }
    </style>
</body>

</html>

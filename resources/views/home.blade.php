@extends('layout.navigation')
@section('title', 'halaman home')

@section('content')
<div class="body">

    <img src="{{ asset('6.jpeg') }}" alt="Deskripsi Gambar">
    <div class="home-content">
        <div class="box1">
            <div class="info">
                <h1>Peminjam</h1>
                <p>Total peminjam: {{ count($posts) }}</p>
            </div>
            <div class="img1">
                <h1><i class='bx bxs-user-plus'></i></h1>
            </div>
        </div>
        <div class="box2">
            <div class="info">
                <h1>Buku</h1>
                <p>Total buku: {{ count($gambarArray) }}</p>
            </div>
            <div class="img2">
                <h1><i class='bx bxs-bar-chart-alt-2' ></i></h1>
                {{-- <h1><i class='bx bxs-book-open'></i></h1> --}}
            </div>
        </div>
    </div>
    <div class="rule">
        <h1>Aturan</h1>
        <table >
            {{-- <tr>
                <th>No.</th>
                <th>Ketentuan Peminjaman</th>
            </tr> --}}
            <tr>
                <td>1.</td>
                <td>Setiap peminjam hanya diijinkan meminjam maksimal 2 buah buku pustaka.</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Setiap kali peminjaman diberi waktu hanya satu minggu.</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Apabila pengembalian melebihi tanggal yang ditetapkan, maka dikategorikan TERLAMBAT, dan setiap keterlambatan dikenakan sanksi.</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Setiap peminjam wajib memperlakukan buku/bahan pustaka dengan sebaik-baiknya, sehingga buku tidak kotor dan tidak rusak.</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Apabila terjadi kerusakan/kehilangan buku/bahan pustaka yang dipinjam, maka peminjam wajib mengganti dengan buku/bahan pustaka yang sama.</td>
            </tr>
        </table>

    </div>
</div>
<style>
    .body{
        margin-left: 23%;
        padding-top: 5%;
    }
    .home-content {

        display: grid;
        grid-template-columns: repeat(2, 45%);
        grid-gap: 10px;
    }

    .box1, .box2 {
        padding: 20px;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .box1 {
        display: flex;
        align-items: center;
        justify-content: space-between;
        /*background: rgb(195, 6, 6);*/
        background: linear-gradient(to right, #001222, rgb(198, 69, 69));
        border: 2px solid rgb(198, 69, 69);
    }

    .img {
        position: relative;
    }

    .img1 h1 i {
        font-size: 220px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgba(22, 22, 22, 0.4)
    }
    .img2 h1 i {
        font-size: 160px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgba(22, 22, 22, 0.4)
    }

    .box2 {
        /* background: rgb(3, 92, 193); */
        background: linear-gradient(to right, #001222, rgb(104, 147, 197));
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 2px solid rgb(104, 147, 197);
    }
    .body img{
        opacity: .15;
        height: 125%;
            object-fit: cover;
            width: 83%;
            position: absolute;
            right: 0;
    }
    .rule{
        color: white;
        margin-right: 15%;
        margin-top: 30px;
    }
    td{
        padding-right: 10px;
        padding-bottom: 10px;
        top: 0;
    }
</style>

@endsection

{{-- <div class="home-content">
    <h1>login</h1>
    <form action="/login/true" method="post">
        @csrf
        <div class="login">
            <label for="email">Email</label>
            <input type="email" name="email" class="email" value="">
        </div>
        <div class="login">
            <label for="password">Password</label>
            <input type="password" name="password" class="password" value="">
        </div>
        <div class="login">
        <button type="submit" name="submit" class="btn">Login</button>
        </div>
    </form>
</div>
<style>

</style> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>

    <div class="body">
        <img src="{{ asset('download.jpeg') }}" alt="Deskripsi Gambar">
        <div class="home-content">
            <span class="bg">

            </span>
            <div class="form-box login">
                <h2>Login</h2>
                <form action="/login/true" method="post">
                    @csrf
                    <div class="input-box">
                        <input type="text" name="email" class="email" value="" required>
                        <label for="">email</label>
                        <i class='bx bx-user'></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" class="password" value="" required>
                        <label for="">password</label>
                        <i class='bx bx-lock-alt'></i>
                    </div>
                    <button type="submit" name="submit" class="btn">Login</button>
                    {{-- <div class="logreg-link">
                        <p>register <a href="#">sign up</a></p>
                    </div> --}}
                </form>
            </div>
            <div class="info login">
                <h2>Akses Akun</h2>
                <p>Silakan Masukkan Informasi Login Anda Untuk Akses Ke Akun perpustakaan.</p>
            </div>
        </div>
    </div>
</body>

</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-width: 100vh;
        background-color: #050222;
        overflow: hidden;
    }

    .body img[src$='download.jpeg'] {
        opacity: .15;
        height: 100%;
        object-fit: cover;
        width: 100%;
        position: absolute;
        right: 0;
    }

    .home-content {
        /* position: relative;
        width: 750px;
        height: 450px;
        background: transparent;
        border: 2px solid rgb(104, 147, 197);
        overflow: hidden;
        box-shadow: 0 0 25px #6893c5; */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 750px;
        height: 450px;
        background: transparent;
        border: 2px solid rgb(104, 147, 197);
        overflow: hidden;
        box-shadow: 0 0 35px #6893c5;
    }

    .home-content .form-box {
        position: absolute;
        top: 0;
        width: 50%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-box h2 {
        font-size: 32px;
        color: white;
        text-align: center;
    }

    .form-box .input-box {
        position: relative;
        width: 100%;
        height: 50px;
        margin: 25px 0;
    }

    .home-content .form-box.login {
        left: 0;
        padding: 0 60px 0 40px;
    }

    .input-box input {
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border-bottom: 2px solid white;
        padding-right: 23px font-size: 16px;
        color: white;
        transition: .5s;
    }

    .input-box input:focus,
    .input-box input:valid {
        border-bottom-color: rgb(104, 147, 197);

    }

    .input-box label {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        font-size: 16px;
        color: white;
        pointer-events: none;
        transition: .5s;
    }

    .input-box input:focus~label,
    .input-box input:valid~label {
        top: -5px;
        color: rgb(104, 147, 197);
    }

    .input-box i {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        font-size: 18px;
        color: white;
        transition: .5s;

    }

    .input-box input:focus~i,
    .input-box input:valid~i {
        color: rgb(104, 147, 197);
    }

    .btn {
        position: relative;
        width: 100%;
        height: 45px;
        background: transparent;
        border: 2px solid rgb(104, 147, 197);
        outline: none;
        border-radius: 40px;
        cursor: pointer;
        font-size: 16px;
        color: white;
        font-weight: 600;
        z-index: 1;
        overflow: hidden;
    }

    .btn::before {
        content: '';
        position: absolute;
        top: -100%;
        left: 0;
        width: 100%;
        height: 300%;
        background: linear-gradient(#001222, #6893c5, #001222, #6893c5);
        z-index: -1;
        transition: .5s;
    }

    .btn:hover::before {
        top: 0;
    }

    /* .form-box .logreg-link{
        font-size: 14.5px;
        color: white;
        text-align: center;
        margin: 20px 0 10px;
    }
    .logreg-link p a{
        color: rgb(104, 147, 197);
        text-decoration: none;
        font-weight: 600;
    }
    .logreg-link p a:hover{
        text-decoration: underline;
    } */
    .home-content .info {
        position: absolute;
        top: 0;
        width: 50%;
        height: 100%;
        /* background: #6893c5; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* align-items: center; */
    }

    .home-content .info.login {
        right: 0;
        text-align: right;
        padding: 0 40px 60px 100px;
    }

    .info h2 {
        font-size: 36px;
        color: white;
        line-height: 1.3;
        text-transform: uppercase;
    }

    .info p {
        font-size: 16px;
        color: white;
    }

    .home-content .bg {
        position: absolute;
        top: 0;
        right: -4px;
        width: 850px;
        height: 600px;
        background: linear-gradient(45deg, #001222, #6893c5);
        border-bottom: 3px solid #6893c5;
        transform: rotate(10deg) skewY(40deg);
        transform-origin: bottom right;
    }
</style>

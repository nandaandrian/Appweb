<?php
    session_start();
    if(empty($_SESSION['id']) || $_SESSION['name'] == ''){
        header("Location: index.php?action=3");
        die();
    }
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web registrasi pasien</title>
    <style>
            @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: url('image/bghome2.jpg') no-repeat;
                background-size: cover;
                background-position: center;
            }
            header {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                padding: 20px 100px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                z-index: 99;
                text-shadow: 1px 1px 2px #B0C4DE;

            }
            .logo {
                font-size: 2em;
                font-weight: 200;
                color: #fff;
                user-select: none;
            }
            .navigation a {
                position: relative;
                font-size: 1.1em;
                color: #fff;
                text-decoration: none;
                font-weight: 500;
                margin-left: 40px;
            }
            .navigation a::after {
                content: '';
                position: absolute;
                left: 0;
                bottom: -6px;
                width: 100%;
                height: 3px;
                background: #fff;
                transform: scaleX(0);
                transition: transform .5s;
            }
            .navigation a:hover::after {
                transform: scaleX(1);
                transform-origin: left;

            }
            .navigation .btnLogin-popup {
                width: 130px;
                height: 50px;
                background: transparent;
                border: 2px solid #fff;
                outline: none;
                border-radius: 6px;
                cursor: pointer;
                font-size: 1.1em;
                color: #fff;
                font-weight: 500;
                margin-left: 40px;
                transition: .5s;
            }
            .navigation .btnLogout-popup {
                width: 100px;
                height: 50px;
                background: transparent;
                border: 2px solid #fff;
                outline: none;
                border-radius: 6px;
                cursor: pointer;
                font-size: 1.1em;
                color: #fff;
                font-weight: 500;
                margin-left: 40px;
                transition: .5s;
            }
            .navigation .btnLogin-popup:hover {
                background: #fff;
                color: #162938;

            }
            .navigation .btnLogout-popup:hover {
                background: #fff;
                color: #162938;

            }

            .wrapper {
                position: relative;
                width: 400px;
                height: 400px;
                background: transparent;
                border: 2px solid rgba(255, 255, 255, .5);
                border-radius: 20px;
                backdrop-filter: blur(20px);
                box-shadow: 0 0 30px rgba(0, 0, 0, .5);
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
                transform: scale(0); 
                transition: transform .5s ease, height .2s ease;
            }
            .wrapper.active-popup {
                transform: scale(1);
            }
            .wrapper.active {
                height: 620px;
            }
            .wrapper .form-box {
                width: 100%;
                padding: 40px;
            }
            .wrapper .icon-close {
                position: absolute;
                top: 0;
                right: 0;
                width: 45px;
                height: 45px;
                background: #162938;
                font-size: 2em;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                border-bottom-left-radius: 20px;
                cursor: pointer;
                z-index: 1;
            }
            .wrapper .form-box.login {
                transition: transform .18s ease;
                transform: translateX(0);
            }
            .wrapper.active .form-box.login {
                transition: none;
                transform: translateX(-400px);
            }
            .wrapper.active .form-box.register {
                transition: transform .18s ease;
                transform: translateX(0);
            }
            .wrapper .form-box.register {
                position: absolute;
                transition: none;
                transform: translateX(400px);
            }
            .form-box h2 {
                font-size: 2em;
                color: black;
                text-align: center;
            }
            .input-box {
                position: relative;
                width: 100%;
                height: 50px;
                border-bottom: 2px solid white;
                margin: 30px 0;
            }
            .input-box label {
                position: absolute;
                top: 50%;
                left: 5px;
                transform: translateY(-50%);
                font-size: 1em;
                color: white;
                font-weight: 500;
                pointer-events: none;
                transition: .5s; 
            }
            .input-box input:focus~label,
            .input-box input:valid~label {
                top: -1px;
                color: white;
            }
            .input-box input {
                width: 100%;
                height: 100%;
                background: transparent;
                border: none; 
                outline: none;
                font-size: 1em;
                color: white;
                font-weight: 300;
                padding: 0px 35px 0px 5px;
            }
            .input-box .icon {
                position: absolute;
                right: 8px;
                font-size: 1.2em;
                color: black;
                line-height: 57px;
            }
            .input-box input[type="date"] {
                padding: 0px 10px 0px 5px;

            }
            .input-box input[type=date]:required:invalid::-webkit-datetime-edit {
                color: transparent;
            }
            .input-box input[type=date]:focus::-webkit-datetime-edit {
                color: black !important;
            }

            .remember-forgot {
                font-size: .9em;
                color: #162938;
                font-weight: 500;
                margin: -15px 0 15px;
                display: flex;
                justify-content: space-between;
            }
            .remember-forgot label input {
                accent-color: #162938;
                margin-right: 3px;
            }
            .remember-forgot a {
                color: #162938;
                text-decoration: none;
            }

            .remember-forgot a:hover {
                text-decoration: underline;
            }
            .btn {
                width: 100%;
                height: 45px;
                background: #00BFFF;
                border: none;
                outline: none;
                border-radius: 6px;
                cursor: pointer;
                font-size: 1em;
                color: #fff;
                font-weight: 500;
            }
            .btn:hover {
                background: #1E90FF;
                color: white;
            }
            .login-register {
                font-size: .9em;
                color: #162938;
                text-align: center;
                font-weight: 500;
                margin: 25px 0 10px;
            }
            .login-register p a {
                color: #F0F8FF;
                text-decoration: none;
                font-weight: 600;
            }
            .login-register p a:hover {
                text-decoration: underline;
                color: #FF00FF;
            }
            .scrol {
                width: 100%;
                height: 400px;
                overflow: scroll;

            }


    </style>
</head>

<body>
    <?php
    if(isset($_GET['action'])){
        if($_GET['action'] == "1"){ ?>
        <script type="text/javascript" src="Sweetalert/dist/sweetalert2.all.min.js"></script>
        <script>
        Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Inserted Successfully',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    <?php
        }
    if($_GET['action'] == "2"){ ?>
        <script type="text/javascript" src="Sweetalert/dist/sweetalert2.all.min.js"></script>
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Data not Inserted',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
        <?php
    }
    }
?>
    <header>
        <h2 class="logo">Hi, <?php echo $_SESSION['name']?> </h2>
        <nav class="navigation">
            <a href="#">Profile</a>
            <button class="btnLogin-popup">Pasien</button>
            <script type="text/javascript" src="Sweetalert/dist/sweetalert2.all.min.js"></script>
            <button class="btnLogout-popup" onclick="Flogout()">Logout</button>
            <script>
            function Flogout(){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to logged out !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        location.href = "Logout.php";
                    }
                    })
            }
            </script>
        </nav>
    </header>

    <div class="wrapper">
        <span class="icon-close"> 
            <ion-icon class="link-close" name="close"></ion-icon>
        </span>
        <div class="form-box login">
            <h2>Pasien</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="pencil"></ion-icon></span>
                    <input type="text" required>
                    <label>NIK</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" required>
                    <label>NAMA</label>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Belum pernah daftar? <a href="#" class="register-link">Daftar</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Daftar Pasien</h2>
            <form action="InsertPasien.php" method="POST">
                <div class="scrol">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <input type="text" name="nama" required>
                        <label>Nama</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="pencil"></ion-icon></span>
                        <input type="text" name="nik" required>
                        <label>NIK</label>
                    </div>
                    <div class="input-box">
                        <input type="date" name="tgl" required>
                        <label>Tanggal Lahir</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="map-outline"></ion-icon></span>
                        <input type="text" name="alamat" required>
                        <label>Alamat</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="call-outline"></ion-icon></span>
                        <input type="text" name="nohp" required>
                        <label>No Handphone</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="male-female-outline"></ion-icon></span>
                        <input type="text" name="gender" required>
                        <label>Jenis Kelamin</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
                        <input type="text" name="pekerjaan" required>
                        <label>Pekerjaan</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="medkit-outline"></ion-icon></span>
                        <input type="text" name="alergi" required>
                        <label>Alergi</label>
                    </div>
                </div>
                &nbsp;
                <button type="submit" class="btn">Daftar</button>
                <div class="login-register">
                    <p>Sudah pernah daftar ? <a href="#" class="login-link">Check</a></p>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="scr.js" charset="utf-8"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>


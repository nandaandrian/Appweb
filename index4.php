
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css" />
  <style>
    mya.link {
      font-family: "open_sanslight";
    }
    body {
        font-family: Arial;
        background-color: #F2F6FF;
    }

    .split {
        height: 100%;
        width: 50%;
        position: fixed;
        z-index: 1;
        top: 0;
        overflow-x: hidden;
        padding-top: 20px;
        }
    .left {
        border-radius: 0px 35px 35px 0px;
        left: 0;
        background-color: #C4FAF8;
        box-shadow:0 0 20px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    }

    .right {
        right: 0;
    }

    .centered {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .centered #judul {
      font-family: "Open Sans";
      font-weight: 300;
      font-size: 60px;
      color: #6C63FF;
      
    }
    .centered img {
        width: 600px;
    }
    .wrapper {
      position: relative;
      width: 400px;
      height: 400px;
      background: white;
      border: 2px solid rgba(255, 255, 255, .5);
      border-radius: 20px;
      backdrop-filter: blur(20px);
      box-shadow: 0 0 30px rgba(0, 0, 0, .5);
      display: flex;
      justify-content: center;
      align-items: center;
      
    }
    .wrapper.form-box {
      width: 100%;
      padding: 40px;
    }
    .wrapper .form-box.login {
      transition: transform .18s ease;
      transform: translateX(0);
    }
    .form-box #Jlogin {
      font-size: 2em;
      color: #162938;
      text-align: center;
    }
    .input-box {
      position: relative;
      width: 100%;
      height: 50px;
      border-bottom: 2px solid #162938;
    }
    .input-box label {
      position: absolute;
      top: 50%;
      left: 5px;
      transform: translateY(-50%);
      font-size: 1em;
      color: #162938;
      font-weight: 500;
      pointer-events: none;
      transition: .5s ease; 
    }
    .input-box input:focus~label,
    .input-box input:valid~label {
      top: -1px;
      color: #6C63FF;
    }
    .input-box input {
      width: 100%;
      height: 100%;
      background: none;
      border: none; 
      outline: none;
      font-size: 1em;
      color: #162938;
      font-weight: 500;
      padding: 0px -200px 0px -50px;
    }
    .input-box .icon {
      position: absolute;
      right: 8px;
      font-size: 1.2em;
      color: #162938;
      line-height: 57px;
    }
    .btn {
      width: 100%;
      height: 45px;
      background: #6C63FF;
      border: none;
      outline: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1em;
      color: #fff;
      font-weight: 500;
    }
    .btn:hover {
      background: #4D42FF;
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
      color: #162938;
      text-decoration: none;
      font-weight: 600;
    }
    .login-register p a:hover {
      text-decoration: underline;
      color: #6C63FF;
    }
    .remember-forgot {
      font-size: .9em;
      color: #162938;
      font-weight: 500;
      margin: 10px 0 15px;
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
      color: #6C63FF;
    }
    .bottom-label {
      font-size: .9em;
      color: #162938;
      font-weight: 500;
      display: flex;
      justify-content: space-between;
      margin-top: 90%;
      margin-left: 25%;
      margin-right: 25%;   
    }
   
  </style>
</head>
<body>

<div class="split left">
  <div class="centered judul">
      <h2 id="judul">My </br> &nbsp; &nbsp; Medicare</h2>
    <img src="image/undraw.svg" alt="Avatar 1">
  </div>
</div>

<div class="split right">
<?php 
if(isset($_GET['action'])){
	if($_GET['action'] == "1"){ ?>
    <script type="text/javascript" src="Sweetalert/dist/sweetalert2.all.min.js"></script>
    <script>
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'error',
        title: 'Login Failed !'
      })

    </script>
  <?php
	}
  if($_GET['action'] == "2"){ ?>
    <script type="text/javascript" src="Sweetalert/dist/sweetalert2.all.min.js"></script>
    <script>
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'success',
        title: 'Logout was Succesfully !'
      })

    </script>
  <?php
	}
  if($_GET['action'] == "3"){ ?>
    <script type="text/javascript" src="Sweetalert/dist/sweetalert2.all.min.js"></script>
    <script>
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'warning',
        title: 'You must login to continue !'
      })

    </script>
  <?php
	}
}
?>
  <div class="centered">
    <div class="wrapper">
        <div class="form-box login">
              <h2 id="Jlogin">Sign In</h2>
              <form method="POST" action="CheckLogin.php" onSubmit="return validasi()">
                <div class="input-box">
                  <span class="icon"><ion-icon name="person"></ion-icon></span>
                  <input id="username" name="username" type="text" required>
                  <label>Username</label>
                </div>
                &nbsp;
                <div class="input-box">
                  <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                  <input id="password" name="password" type="password" required>
                  <label>Password</label>
                </div>
                <div class="remember-forgot">
                  <label><input type="checkbox" name="remember[]" value="1">Remember me</label>
                  <a href="#">Forgot Password?</a>
                </div>
                &nbsp;
                <button type="submit" class="btn" value="submit">Sign In</button>
                <div class="login-register">
                  <p>Don't have an account ? <a href="#" class="register-link">Register</a></p>
                </div>
              </form>
            </div>
    </div>
</div>
    <div class="bottom-label">
            <label><ion-icon name="call"></ion-icon>  08123456789</label>
            <label><ion-icon name="mail-open"></ion-icon>  Mymedicare@kesehatan.com</label>
            </div>  
  </div>
</div>
<script src="scr.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html> 


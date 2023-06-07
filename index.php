<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: url('image/bg4.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        img.img-logo {
            width: 150px;
            justify-content: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
        }
        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
        }
        .container {
            width: 350px;
            display: flex;
            flex-direction: column;
            padding: 0 15px 0 15px;
        }   
        .container h2 {
            color: white;
            display: 30px;
            justify-content: center;
            padding: 10px 0 10px 0;
        }
        .input-field {
            display: flex;
            flex-direction: column;
        }
        .input {
            height: 45px;
            width: 87%;
            border: none;
            outline: none;
            border-radius: 30px;
            color: white;
            padding: 0 0 0 42px;
            background: rgba(255,255,255,0.3);
           
        }
        i {
            position: relative;
            top: -31px;
            left: 17px;
            color: white;
        }
        ::-webkit-input-placeholder {
            color: white;
        }
        .submit {
            border: none;
            border-radius: 30px;
            font-size: 15px;
            height: 45px;
            outline: none;
            width: 100%;
            background: rgba(255,255,255,0.7);
            cursor: pointer;
            transition: .3s;
        }
        .submit:hover {
            box-shadow: 1px 5px 7px 1px rgba(0,0,0,0.2);
            background: white;
        }
        .remember-forgot {
            font-size: .9em;
            color: #162938;
            font-weight: 400;
            margin: -15px 0 15px;
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .remember-forgot a {
            color: white;
            text-decoration: none;
        }
        .login-register {
            font-size: .9em;
            color: black;
            text-align: left;
            font-weight: 400;
            margin: 25px 0 10px;
        }
        .login-register p a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }
        .login-register p a:hover {
            text-decoration: underline;
            color: white;
         }
        
    </style>
</head>
<body>
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
        title: 'You are not logged in !'
      })

    </script>
  <?php
	}
}
?>
    <div class="box">
        <div class="container">
            
                <img class="img-logo" src="image/Logo.png"/>
            
            <form action="CheckLogin.php" method="post">
                <div class="input-filed">
                    <input type="text" name="username" class="input" placeholder="Username" required>
                    <i class="bx"><ion-icon name="person-outline"></ion-icon></i>
                </div>
                <div class="input-filed">
                    <input type="password" name="password" class="input" placeholder="Password" required>
                    <i class="bx"><ion-icon name="lock-closed-outline"></ion-icon></i>
                </div>
                <div class="input-filed">
                    <input type="submit" class="submit" value="submit">
                </div>
                <div class="remember-forgot">
                  <label><input type="checkbox" name="remember[]" value="1">Remember me</label>
                  <a href="#">Forgot Password?</a>
                </div>
                <div class="login-register">
                    <p>Don't have an account ? <a href="#" class="register-link">Register</a></p>
                </div>

            </form>
            
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
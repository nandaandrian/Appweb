<?php
session_start();
  include 'koneksi.php';
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $remember = $_POST['remember'][1];

      $sql = "SELECT * FROM pegawai where username = '$username' and password = '$password'";
      $query = mysqli_query($koneksi, $sql);
      $data = mysqli_fetch_row($query);
      $Out = mysqli_num_rows($query);
      
      if($Out > 0){
        $_SESSION['id'] = $data[0];
        $_SESSION['name'] = $data[1];

        if($remember == "1"){
          $cookie_name = "cookie_username";
          $cookie_value = $username;
          $cookie_time = time() + (60 * 60 * 24 * 30);
          setcookie($cookie_name, $cookie_value, $cookie_time, "/");
  
          $cookie_name = "cookie_password";
          $cookie_value = $password;
          $cookie_time = time() + 60 * 60 * 24 * 30;
          setcookie($cookie_name, $cookie_value, $cookie_time, "/");
         }
        header("Location:Dashboard.php");
      }else{
        header("Location:index.php?action=1");
      }
?>
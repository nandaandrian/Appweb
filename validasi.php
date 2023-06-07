<?php
session_start();
include("koneksi.php");

$err = "";
$username = "";
$remember = "";
if(isset($_POST['Login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = $_POST['remember'];

    if($username == '' or $password == ''){
      $err .= "<li>Silahkan masukkan username and password";
    }else{
      $sql = "SELECT * FROM pegawai where username = '$username'";
      $query = mysqli_query($koneksi, $sql);
      $Out = mysqli_fetch_array($query);

      if($Out['username'] == ''){
        $err .= "error userneme";
      }elseif(Out['password'] != md5($password)){
        $err .= "error password";
    }

    if(empty($err)){
       $_SESSIONN['session_username'] = $username;
       $_SESSION['session_password'] = md5($password);

       if($remember == 1){
        $cookie_name = "cookie_remember";
        $cookie_value = $username;
        $cookie_time = time() + (60 * 60 * 24 * 30);
        setcookie($cookie_name, $cookie_value, $cookie_time, "/");

        $cookie_name = "cookie_password";
        $cookie_value = md5($password);
        $cookie_time = time() + 60 * 60 * 24 * 30;
        setcookie($cookie_name, $cookie_value, $cookie_time, "/");
       }
       header("location:test.php");
    }
  }


}
?>
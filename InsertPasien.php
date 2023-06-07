<?php
  include 'koneksi.php';
    $nama = $_POST['nama'];
    $NIK = $_POST['nik'];
    $tgl = $_POST['tgl'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $gender = $_POST['gender'];
    $pekerjaan = $_POST['pekerjaan'];
    $alergi = $_POST['alergi'];
    

    $sql = "INSERT INTO `pasien`(`nama`, `NIK`, `TglLahir`, `alamat`, `NoHp`, `JKelamin`, `pekerjaan`, `alergi`) VALUES ('$nama','$NIK','$tgl','$alamat','$nohp','$gender','$pekerjaan','$alergi')";
    $query = mysqli_query($koneksi, $sql);
    $result = mysqli_num_row($query);
    
    if ($result > 0) 
    {
        header("Location Dashboard.php?action=1");
    } else {
        header("Location Dashboard.php?action=2");
    }
     
      
?>
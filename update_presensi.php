<?php 
require('conn.php');
  if(!empty($_POST["kirim"])) {

      $npm = $_POST['npm'];
      $id=$_POST['id'];
      $matkul = $_POST['matkul'];
      $tanggal = $_POST['tanggal'];
      $dosen= $_POST['dosen'];
      $status = $_POST['status'];
      $kelas = $_POST['kelas'];
      $ta=$_POST['ta'];

  $masuk= mysqli_query($con, "UPDATE absen set matkul='$matkul', tanggal='$tanggal', dosen='$dosen', status=$status,kelas='$kelas',ta='$ta' where id=$id     ");
                          if(!$masuk){
                             
                             echo '<script>alert("Gagal");</script>';   
                              
                              }else{
                                echo "<script type='text/javascript'> document.location = 'lihat_izin.php'; </script>";
                                $_SESSION['berhasil']=true;
                              }
  }
?>
<?php 
require('conn.php');
  if(!empty($_POST["kirim"])) {

      $npm = $_POST['npm'];
      $id=$_POST['id'];
      $nama = $_POST['nama'];
      $jurusan = $_POST['jurusan'];
     

  $masuk= mysqli_query($con, "UPDATE mahasiswa set npm=$npm,nama='$nama',jurusan='$jurusan' where npm=$id     ");
                          if(!$masuk){
                             
                             echo '<script>alert("Gagal");</script>';   
                              
                              }else{
                                echo "<script type='text/javascript'> document.location = 'lihat_mahasiswa.php'; </script>";
                                $_SESSION['berhasil']=true;
                              }
  }
?>
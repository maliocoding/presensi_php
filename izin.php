<?php 
require_once('conn.php');
if (!empty($_SESSION['sudahlogin']) && $_SESSION['sudahlogin'] == 'udahdong' && $_SESSION['jenis']!='mahasiswa'){
$myquery = mysqli_query($con, "select nama_dosen from dosen where jenis='dosen' ");
$query_matkul=mysqli_query($con, "select kode,matkul from matkul ");
        
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PRESENSI STMIK AMIKBANDUNG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="maliocoding@gmail.com" content="maliocoding@gmail.com.">
    <meta name="msapplication-tap-highlight" content="no">
   
<link href="./main.css" rel="stylesheet">

<link rel="stylesheet" href="./assets/scripts/dt2.css" >
<link href="./assets/scripts/select2.css" rel="stylesheet" />
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        
             
            <?php include('header.php'); ?>
            
              <div class="app-main">
               <?php  include('sidebar.php');?> 


                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-graph text-success">
                                        </i>
                                    </div>
                                    <div>izin Presensi
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  <!--   <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button> -->
                                  
                                </div>    </div>
                        </div>           


                     <!--     <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Layout</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span>Grid</span>
                                </a>
                            </li>
                        </ul> -->
                        <div class="tab-content">
                             <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Grid</h5>
                                        <form method="post" action="izin.php">
                                            <div class="position-relative row form-group"><label for="validationTooltip03" class="col-sm-2 col-form-label">NPM</label>
                                                <div class="col-sm-10">
                                                   <input type="text" name="npm" id="npm" class="form-control">
                                                   <button type="button" id="cek">Cek NPM</button>
                                                </div>
                                            </div>

                                            <div class="position-relative row form-group"><label for="validationTooltip03" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                   <input type="text" id="nama" class="form-control" readonly>
                                                   
                                                </div>
                                            </div>

                                             <div class="position-relative row form-group"><label for="validationTooltip03" class="col-sm-2 col-form-label">Mata Kuliah</label>
                                                <div class="col-sm-10">
                                                     <select class="form-control select2" name="matkul">
                                                            <option>--Pilih Matakuliah--</option>
                                                            <?php

                                                              while ($d=mysqli_fetch_array($query_matkul,MYSQLI_ASSOC)){
                                                                echo '<option value="'.$d['kode'].'">'.$d['matkul'].' ('.$d['kode'].')</option>';
                                                              }
                                                            

                                                             ?>
                                                    </select>
                                                   
                                                </div>
                                            </div>
                                              <div class="position-relative row form-group"><label for="validationTooltip03" class="col-sm-2 col-form-label">Tanggal</label>
                                               <div class="col-sm-3" >
                                                    <div class='input-group date' >
                                                     <input type='text' class="form-control datetimepicker2" name="tanggal"  />
                                                            
                                                   </div>
                                                </div>
                                            </div>

                                            <div class="position-relative row form-group"><label for="validationTooltip03" class="col-sm-2 col-form-label">Dosen</label>
                                                <div class="col-sm-10">
                                                     <select class="form-control select2" name="dosen">
                                                            <option>--Cari Dosen--</option>
                                                            <?php

                                                              while ($res=mysqli_fetch_array($myquery,MYSQLI_ASSOC)){
                                                                echo '<option>'.$res['nama_dosen'].'</option>';
                                                              }
                                                            

                                                             ?>
                                                      
                                                    </select>
                                                   
                                                </div>
                                            </div>

                                             <div class="position-relative row form-group"><label for="validationTooltip03" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                                                <div class="col-sm-10">
                                                     <select class="form-control" name="ta">
                                                       <option>2019/2020</option>
                                                        <option>2020/2021</option>
                                                        <option>2021/2022</option>
                                                        <option>2022/2023</option>
                                                        <option>2023/2024</option>
                                                    </select>
                                                   
                                                </div>
                                            </div>


                                             <div class="position-relative row form-group"><label for="validationTooltip03" class="col-sm-2 col-form-label">Kelas</label>
                                                <div class="col-sm-10">
                                                     <select class="form-control" name="kelas">
                                                        <option>Reguler</option>
                                                        <option>Karyawan</option>
                                                    </select>
                                                   
                                                </div>
                                            </div>

                                              <div class="position-relative row form-group"><label for="validationTooltip03" class="col-sm-2 col-form-label">Keterangan</label>
                                                <div class="col-sm-10">
                                                     <select class="form-control" name="status">
                                                        <option value="0">Hadir</option>
                                                        <option value="2">Izin</option>
                                                        <option value="3">Sakit</option>
                                                    </select>
                                                   
                                                </div>
                                            </div>

                                        
                                                    <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                     <button class="btn btn-primary" type="submit" name="kirim" value="kirim">Submit form</button>
                                                </div>
                                            </div>
                                            </div>


                                           
                                           
                                        
                                        </form>
                                    </div>
                                </div>
                    </div>

                   <?php include('footer.php'); ?>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script type="text/javascript" src="./assets/scripts/jquery.min.js"></script>
<script type="text/javascript" src="./assets/scripts/moment.js"></script>
<script type="text/javascript" src="./assets/scripts/transition.js"></script>
<script type="text/javascript" src="./assets/scripts/collapse.js"></script>
<script type="text/javascript" src="./assets/scripts/popper.js"></script>
<script type="text/javascript" src="./assets/scripts/bootstrap.min.js"></script>
<script src="./assets/scripts/datetimepicker.js"></script>
<script src="./assets/scripts/select2.js"></script>
   <script type="text/javascript">
    $('.datetimepicker2').datetimepicker({
       format: 'YYYY-MM-DD'
        });
    $(document).ready(function() {
      $('.select2').select2();
      });

    $( "#cek" ).click(function() {
      var npm = $('#npm').val();
       

       $.ajax({
        type: "POST",
        url: "cek.php",
        data: {npm: npm},
        success:function(result){
               
                $('#nama').val(result);
              

            }
      });
  
  });
                                       
  
 
  </script>


</body>
</html>

<?php

  if(!empty($_POST["kirim"])) {

      $npm = $_POST['npm'];
      $nama = $_POST['nama'];
      $matkul = $_POST['matkul'];
      $tanggal = $_POST['tanggal'];
      $dosen= $_POST['dosen'];
      $status = $_POST['status'];
      $kelas = $_POST['kelas'];
      $ta=$_POST['ta'];

  $masuk= mysqli_query($con, "insert into absen (kelas,npm,nama,matkul,dosen,tanggal,status,ta) values ('$kelas',$npm,'$nama','$matkul','$dosen','$tanggal',$status,'$ta')");
                          if(!$masuk){
                             
                             echo '<script>alert("Not OK");</script>';   
                              
                              }else{
                                echo '<script>alert("OK");</script>';  
                              }
  }

}else{
   header('Location: login.php');
}



 ?>
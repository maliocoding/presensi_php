<?php 
require_once('conn.php');
if (!empty($_SESSION['sudahlogin']) && $_SESSION['sudahlogin'] == 'udahdong' && $_SESSION['jenis']!='mahasiswa'){
$query = mysqli_query($con, "select nama_dosen from dosen where jenis='dosen' ");
$query_matkul=mysqli_query($con, "select kode,matkul from matkul ");
 
 if (!empty($_SESSION['berhasil'])==true){
  echo '<script>alert("Update berhasil");</script>';
 }
 $_SESSION['berhasil']=false;

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
                                    <div>Kelola presensi
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
                                    <div class="card-body"><h5 class="card-title"></h5>
                                        <form method="post" action="lihat_izin.php">
                                            <div class="position-relative row form-group">
                                                <div class="col-sm-4">
                                                   <select class="form-control select2" name="matkul">
                                                        <option>-Pilih MataKuliah-</option>
                                                       <?php

                                                              while ($d=mysqli_fetch_array($query_matkul,MYSQLI_ASSOC)){
                                                                echo '<option value="'.$d['kode'].'">'.$d['matkul'].' ('.$d['kode'].')</option>';
                                                              }
                                                            

                                                             ?>
                                                    </select>
                                                  
                                                </div>
                                                <div class="col-sm-3">
                                                  <select class="form-control select2" name="kelas">
                                                        <option>-Pilih Kelas-</option>
                                                        <option>Reguler</option>
                                                        <option>Karyawan</option>
                                                      
                                                    </select>
                                                  
                                                </div>

                                                 <div class="col-sm-3">
                                                  <select class="form-control select2" name="ta">
                                                        <option>-Pilih Tahun Ajaran-</option>
                                                        <option>2019/2020</option>
                                                        <option>2020/2021</option>
                                                        <option>2021/2022</option>
                                                        <option>2022/2023</option>
                                                        <option>2023/2024</option>
                                                    </select>
                                                  
                                                </div>
                                                <div class="col-sm-2">
                                                 <button type="submit" class="btn btn-primary" name="pilih" value="pilih" width="100%">Pilih</button>
                                               </div>
                                            </div>
                                          </form>
                                            
                                      </div>
                                    </div>

                             <div class="main-card mb-3 card">

                                      <div class="card-body"><h5 class="card-title"></h5>
                                        
                                            <div class="position-relative row form-group">
                                                <div class="col-sm-12">
                                                  <table class="table" id="myTable">
                                                    <thead>
                                                        <tr>
                                                            <th>NPM</th>
                                                            <th>Nama</th>
                                                            <th>Aksi</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                              <?php

                                              if(!empty($_POST["pilih"])) {

                                                 
                                                 $matkul = $_POST['matkul'];    
                                                 $kelas = $_POST['kelas'];
                                                  $ta=$_POST['ta'];

                                              $qry= mysqli_query($con, "SELECT * from absen where matkul='$matkul' and kelas='$kelas' and ta='$ta'");
                                                    if($qry){
                                                                         
                                                           while ($d=mysqli_fetch_array($qry,MYSQLI_ASSOC)){
                                                                echo '<tr>
                                                                      <td>'.$d['npm'].'</td>
                                                                      <td>'.$d['nama'].'</td>
                                                                      <td><a class="btn btn-primary" href="edit_presensi.php?id='.$d['id'].'">Edit</a> 
                                                                      <a onclick="return confirm(&quot;Are you sure you want to delete?&quot;);" class="btn btn-primary" href="hapus_presensi.php?id='.$d['id'].'">Hapus</a></td>
                                                                      </tr>

                                                                ';
                                                              }
                                                                          
                                                         }
                                              }
                                              ?>
                                                    </tbody>
                                                  </table>
                                                </div>
                                            </div>

                                            
                                      </div>
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
<script type="text/javascript" src="./assets/scripts/datatable.js"></script>
<script src="./assets/scripts/datetimepicker.js"></script>
<script src="./assets/scripts/select2.js"></script>
   <script type="text/javascript">
    $('.datetimepicker2').datetimepicker({
       format: 'YYYY-MM-DD'
        });
    $(document).ready(function() {
      $('.select2').select2();
       $('#myTable').DataTable();
      });

                              
  
 
  </script>


</body>
</html>

<?php


}else{
   header('Location: login.php');
}

 ?>
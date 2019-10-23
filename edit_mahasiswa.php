<?php 
require_once('conn.php');
if (!empty($_SESSION['sudahlogin']) && $_SESSION['sudahlogin'] == 'udahdong' && $_GET['id'] && $_SESSION['jenis']!='mahasiswa'){
$id=filter_sid($_GET['id']);

$qry1= mysqli_query($con, "select * from mahasiswa where npm=$id");
 while ($a=mysqli_fetch_array($qry1,MYSQLI_ASSOC)){
      $isi_npm=$a['npm'];
      $isi_nama=$a['nama'];
      $isi_jur=$a['jurusan'];
      
    }


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
                                    <div>Edit mahasiswa
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
                                        <form method="post" action="update_mahasiswa.php">
                                            <div class="position-relative row form-group"><label for="validationTooltip03" class="col-sm-2 col-form-label">NPM</label>
                                                <div class="col-sm-10">
                                                   <input type="text" name="npm" id="npm" class="form-control" value="<?php echo $isi_npm; ?>" >
                                                  
                                                </div>
                                            </div>

                                            <div class="position-relative row form-group"><label for="validationTooltip03" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                   <input type="text" id="nama" class="form-control" value="<?php echo $isi_nama; ?>" >
                                                   <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                </div>
                                            </div>

                                             

                                             <div class="position-relative row form-group"><label for="validationTooltip03" class="col-sm-2 col-form-label">Jurusan</label>
                                                <div class="col-sm-10">
                                                     <select class="form-control" name="Jurusan">
                                                      <option><?php echo $isi_jur; ?></option>
                                                        <option>Teknik Informatika S1</option>
                                                        <option>Sistem Informasi S1</option>
                                                        <option>Teknik Komputer S1</option>
                                                        <option>Management Informatika S1</option>
                                                        <option>Animasi S1</option>
                                                    </select>
                                                   
                                                </div>
                                            </div>



                                        
                                                    <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                     <button class="btn btn-primary" type="submit" name="kirim" value="kirim">Update</button>
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
       

  
  });
                                       
  
 
  </script>


</body>
</html>

<?php



}else{
   header('Location: login.php');
}



 ?>
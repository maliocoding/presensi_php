<?php
//library phpqrcode
include ('libs/qrlib.php');

//include database
include ('../conn.php');
 
//direktory tempat menyimpan hasil generate qrcode jika folder belum dibuat maka secara otomatis akan membuat terlebih dahulu
$tempdir = "temp/"; 
if (!file_exists($tempdir))
    mkdir($tempdir);
 
?>
<html>
<link rel="stylesheet" type="text/css" href="../assets/scripts/bootstrap.min.css">
<head>
</head>
<body>
  <?php

  


  	$result=array();
  
   



    if (!empty($_POST["matkul"])) {


        
       $dosen=$_POST["dosen"];
      $matkul=$_POST["matkul"];
      $tanggal=$_POST["tanggal"];
      $jam_masuk=$_POST["jam_masuk"];
      $jam_pulang=$_POST["jam_pulang"];
      $kelas=$_POST["kelas"];
      $dosen=$_POST["dosen"];
      $ta=$_POST["ta"];

       $qry2=mysqli_query($con, "select kode,matkul from matkul where kode='$matkul' "); 
       while ($k=mysqli_fetch_array($qry2,MYSQLI_ASSOC)){
       
        $i_matkul=$k['matkul'];
       }


       // $query = mysqli_query($con, "update status_ruangan set status=1,matkul='$matkul' where ruangan='$ruangan' ");
       //    if($query){
       //      echo "<script>console.log('update sukses')</script>";
       //    }



   




	array_push($result,array(
							
								"matkul"=>$matkul,
								"tanggal"=>$tanggal,
                "jam_masuk"=>$jam_masuk,
                "jam_pulang"=>$jam_pulang,
                "kelas"=>$kelas,
                "dosen"=>$dosen,
                "ta"=>$ta
									
								));
   }


  	$data=json_encode(array('result'=>$result));

    //isi QRCode saat discan
    $isi_teks = base64_encode($data);
    //direktori dan nama logo
    $logopath = 'logo.png';
    //namafile setelah jadi qrcode
    $namafile = $matkul.".png";
    //kualitas dan ukuran qrcode
    $quality = 'H'; 
    $ukuran = 8; 
    $padding = 0;
 
    QRCode::png($isi_teks,$tempdir.$namafile,QR_ECLEVEL_H,$ukuran,$padding);
    $filepath = $tempdir.$namafile;
    $QR = imagecreatefrompng($filepath);
 
    $logo = imagecreatefromstring(file_get_contents($logopath));
    $QR_width = imagesx($QR);
    $QR_height = imagesy($QR);
 
    $logo_width = imagesx($logo);
    $logo_height = imagesy($logo);
 
    //besar logo
    $logo_qr_width = $QR_width/2.5;
    $scale = $logo_width/$logo_qr_width;
    $logo_qr_height = $logo_height/$scale;
 
    //posisi logo
    imagecopyresampled($QR, $logo, $QR_width/3, $QR_height/3, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
 
    imagepng($QR,$filepath);
  ?>
 <input type="hidden" name="" value="<?php print_r($data)?>">
 <div class="container">
  <div class="row">
    <div class="col-sm">
     <img src="temp/<?php echo $namafile; ?>" width="400px">
    </div>
    <div class="col-sm">
      Matakuliah : <?php echo $i_matkul.'('.$matkul.')'; ?>
      <br>
      Dosen  : <?php echo $dosen; ?>
      <br>
      kelas  : <?php echo $kelas; ?>
      <table class="table">
        <thead>
          <th>NO</th>
          <th>NPM</th>
          <th>NAMA</th>
          <th>Jam Masuk</th>
          <th>Jam Pulang</th>
          <th>Tanggal</th>
        </thead>
        <tbody class="absen">
   
    </tbody>
  </table>

    </div>
   
  </div>
</div>
 
 
<script type="text/javascript" src="../assets/scripts/jquery.min.js"></script>

<script type="text/javascript">

  
setInterval(ajaxCall, 2000); //300000 MS == 5 minutes

function ajaxCall() {

  $(document).ready(function() {
        
        var matkuls ="<?php echo $matkul ?>";
        var tanggals ="<?php echo $tanggal ?>";
        var jam_masuks ="<?php echo $jam_masuk ?>";
        var jam_pulangs ="<?php echo $jam_pulang ?>";
        var dosens ="<?php echo $dosen ?>";
        var kelass ="<?php echo $kelas ?>";
   
    $.ajax({
        type: "POST",
        url: "../getabsen.php",
        data: {matkul: matkuls, tanggal:tanggals, jam_masuk:jam_masuks,jam_pulang:jam_pulangs,dosen:dosens,kelas:kelass},
        success:function(html){
               
                $('.absen').html(html);
            }
      });
    });
}


 
</script>

</body>




</html>

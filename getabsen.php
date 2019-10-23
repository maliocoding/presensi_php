<?php

require_once('conn.php');
$i=1;
	
	 $dosen=$_POST["dosen"];
      $matkul=$_POST["matkul"];
      $tanggal=$_POST["tanggal"];
      $jam_masuk=$_POST["jam_masuk"];
      $jam_pulang=$_POST["jam_pulang"];
      $kelas=$_POST["kelas"];
      $dosen=$_POST["dosen"];
      $jam='';
//belum pake where
$query = mysqli_query($con, "select *,date(tanggal) as tanggals from absen where dosen='$dosen' and matkul='$matkul' and tanggal='$tanggal' and kelas='$kelas' and (status=0 or status=1)");
				if($query){
						while ($res=mysqli_fetch_array($query,MYSQLI_ASSOC)){
							if($res['status']==1){ 
								$jam='<font color="red">'.$res['jam_masuk'].'</font>'; 
							} else{
								$jam=$res['jam_masuk']; 
							}

							echo '<tr>
							<td>'.$i.'</td><td>'.$res['npm'].'</td><td>'.$res['nama'].'</td><td>'.$jam.'</td><td>'.$res['jam_pulang'].'</td><td>'.$res['tanggals'].'</td>
							</tr>';

							$i++;
						}
				}
				 	

 ?>

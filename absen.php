<?php
	require_once('conn.php');
	date_default_timezone_set("Asia/Jakarta");

	$key= @$_POST['key'];

	if($key=='udin'){


		$npm = $_POST['npm'];
		$nama = $_POST['nama'];
		$matkul = $_POST['matkul'];
		$jam_masuk= $_POST['jam_masuk'];
		$jam_pulang= $_POST['jam_pulang'];
		$dosen= $_POST['dosen'];
		$tanggal = $_POST['tanggal'];
		$result = array();
		$kelas = $_POST['kelas'];
		$ta=$_POST['ta'];
		if(!$npm || !$nama || !$matkul || !$jam_masuk || !$jam_pulang || !$dosen || !$tanggal || !$kelas) {
		 echo json_encode(array('result'=>'Data Barcode invalid'));
		}else{
 
				//cek data kelas available
				// $kelas=  mysqli_query($con, "select * from status_ruangan where ruangan='$ruangan' and matkul='$matkul' and status=1 ");
				// if(mysqli_num_rows($kelas) > 0){
						//cek absen
						$absen= mysqli_query($con, "select * from absen where dosen='$dosen' and matkul='$matkul' and npm=$npm and tanggal='$tanggal' and kelas='$kelas'");
						if(mysqli_num_rows($absen) > 0){
							

							$intervals  = abs(time() - strtotime($jam_pulang));
							$minute   = round($intervals / 60);

								if($minute>1){
									array_push($result,array(
																"status"=>"Waktu Selesai"
																
															));
												 		echo json_encode(array('result'=>$result));
													
								}else{
								
										//data jam pulang
										$update= mysqli_query($con, "update absen set jam_pulang=CURRENT_TIME() where dosen='$dosen' and matkul='$matkul' and npm=$npm and tanggal='$tanggal' and kelas='$kelas' and ta='$ta'");
											if(!$update){
											 		array_push($result,array(
																"status"=>"npm ".$npm
																
															));
													echo json_encode(array('result'=>$result));
												 	
												 		
												 	
											}else{
													array_push($result,array(
																"status"=>"Absen Pulang Sukses"
																
															));
												 		echo json_encode(array('result'=>$result));
													}
									}
									

						}else{

							//data jam masuk
							$interval  = abs(time() - strtotime($jam_masuk));
							$minutes   = round($interval / 60);
							


							if($minutes>15){
								$status=1;
								$telat=$minutes;
							}else{
								$status=0;
								$telat=0;
							}
							

								$masuk= mysqli_query($con, "insert into absen (kelas,npm,nama,matkul,dosen,jam_masuk,tanggal,status,telat,ta) values ('$kelas',$npm,'$nama','$matkul','$dosen',CURRENT_TIME(),'$tanggal',$status,$telat,'$ta')");
												if(!$masuk){
												 		array_push($result,array(
																	"status"=>"npm ".$npm
																	
																));
														echo json_encode(array('result'=>$result));
													 	
													 		
													 	
														}else{
																array_push($result,array(
																			"status"=>"Absen Masuk Sukses"
																			
																		));
															 		echo json_encode(array('result'=>$result));
														}


						// } else {
						// 		echo json_encode(array('result'=>'Tidak ada mata kuliah'));
						// 		}

				}

			

				
		}
	}
		else{
		echo json_encode(array('result'=>'naon euy'));
		}

	mysqli_close($con);
?>
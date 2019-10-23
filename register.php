<?php
	require_once('conn.php');

	$key= @$_POST['key'];

	if($key=='udin'){

		$npm = $_POST['npm'];
		$nama = $_POST['nama'];
		$password = md5($_POST['password']);
		$jurusan = $_POST['jurusan'];
		$imei=$_POST['imei'];
		$result = array();
		//$tipe = $_POST['tipe'];
		if(!$npm || !$password || !$imei || !$nama || !$jurusan) {
	  		echo json_encode(array('message'=>'required field is empty.'));
		}else{
				$query = mysqli_query($con, "insert into mahasiswa (npm,nama,password,jurusan,imei) values ('$npm','$nama','$password','$jurusan','$imei')");
					if($query){
						array_push($result,array(
									"status"=>"berhasil"
									
								));
						echo json_encode(array('result'=>$result));
					 
						}else{
						array_push($result,array(
									"status"=>"gagal"
									
								));
						echo json_encode(array('result'=>$result));
				}
		}
		}else{
			echo "naon euy";
		}

	mysqli_close($con);
?>
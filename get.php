<?php
	require_once('conn.php');

	$key= @$_POST['key'];

	if($key=='udin'){

		$npm = $_POST['npm'];

		$password = md5($_POST['password']);
	
		$imei=$_POST['imei'];
		$result = array();
		//$tipe = $_POST['tipe'];
		if(!$npm || !$password || !$imei) {
	  		array_push($result,array(
									"status"=>"ga ke kirim","nama"=>""
									
								));
						echo json_encode(array('result'=>$result));
		}else{
		


				$query = mysqli_query($con, "select * from mahasiswa where npm=$npm and password='$password' and imei='$imei'");
				if($query){
				 	$rowcount = mysqli_num_rows($query);
				 	$res=mysqli_fetch_array($query,MYSQLI_ASSOC);
					 	if ($rowcount>0){
					 		array_push($result,array(
									"status"=>"sukses",
									"nama"=>$res["nama"]
									
								));
					 		echo json_encode(array('result'=>$result));
					 	}else{
					  	
					   array_push($result,array(
									"status"=>"gagal","nama"=>""
									
								));
					   echo json_encode(array('result'=>$result));


					  }
						}else{
						array_push($result,array(
									"status"=>"gagal","nama"=>""
									
								));
						echo json_encode(array('result'=>$result));
				}
		}
		}else{
			array_push($result,array(
									"status"=>"aduh euy","nama"=>""
									
								));
						echo json_encode(array('result'=>$result));
		}

	mysqli_close($con);
?>
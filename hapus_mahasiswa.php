<?php 
require_once('conn.php');
if(!empty($_GET["id"])) {
	$id=filter_sid($_GET["id"]);

	$query = mysqli_query($con, "delete from mahasiswa where npm=$id ");
				if($query){
						 echo "<script type='text/javascript'> document.location = 'lihat_mahasiswa.php'; </script>";
					}
		

}
?>
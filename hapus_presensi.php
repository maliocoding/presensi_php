<?php 
require_once('conn.php');
if(!empty($_GET["id"])) {
	$id=filter_sid($_GET["id"]);

	$query = mysqli_query($con, "delete from absen where id=$id ");
				if($query){
						 echo "<script type='text/javascript'> document.location = 'lihat_izin.php'; </script>";
					}
		

}
?>
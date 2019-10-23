<?php 
require_once('conn.php');
if(!empty($_POST["npm"])) {
	$npm=$_POST["npm"];

	$query = mysqli_query($con, "select nama from mahasiswa where npm=$npm ");
				if($query){
						while ($res=mysqli_fetch_array($query,MYSQLI_ASSOC)){
							echo $res['nama'];
						}
					}
		

}
?>
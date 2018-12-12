<?php
include "lib.php";

if(isset($_GET['id']) ){
	$id = $_GET['id'];
	$sql = mysqli_query($db, "UPDATE `custorder` SET `status` = 'COMPLETED' WHERE `custorder`.`id` = $id;");

	if($sql){
		echo "<meta http-equiv='refresh' content='0;url=dashboard.php?status=completed-sukses'>";
	} else {
		echo "<meta http-equiv='refresh' content='0;url=dashboard.php?status=completed-gagal'>";
	}
} 
else {
	die("akses dilarang...");
}
?>
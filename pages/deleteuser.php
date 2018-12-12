<?php
include "lib.php";

if(isset($_GET['id']) ){
	$id = $_GET['id'];
	$sql = mysqli_query($db, "DELETE FROM reglogin WHERE id=$id");

	if($sql){
		echo "<meta http-equiv='refresh' content='0;url=useraccount.php?status=delete-sukses'>";
	} else {
		echo "<meta http-equiv='refresh' content='0;url=useraccount.php?status=delete-gagal'>";
	}
}
else {
	die("akses dilarang...");
}
?>

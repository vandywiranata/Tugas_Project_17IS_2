<?php
include "../lib.php";

if (isset($_POST['btnedittitle'])) {

	$id 			= mysqli_real_escape_string($db, $_POST['id']);
	$specialfeature	= mysqli_real_escape_string($db, $_POST['specialfeature']);
	$price 			= mysqli_real_escape_string($db, $_POST['price']);
	$specialteam	= mysqli_real_escape_string($db, $_POST['specialteam']);
	$testimonial	= mysqli_real_escape_string($db, $_POST['testimonial']);
	$faq			= mysqli_real_escape_string($db, $_POST['faq']);
	$appointment	= mysqli_real_escape_string($db, $_POST['appointment']);

	$sql			= mysqli_query($db, "UPDATE laytitle SET specialfeature = '$specialfeature',price = '$price',specialteam = '$specialteam',testimonial = '$testimonial',faq = '$faq',appointment = '$appointment' WHERE id = '$id'");

	if($sql) {
		echo "<meta http-equiv='refresh' content='0;url=../layheadcover.php?status=edittitle-sukses'>";
	} else {
		echo "<meta http-equiv='refresh' content='0;url=../layheadcover.php?status=edittitle-gagal'>";
	}
	
} else if (isset($_POST['btneditcover'])) {

	$id 			= mysqli_real_escape_string($db, $_POST['id']);
	$subjek1		= mysqli_real_escape_string($db, $_POST['subjek1']);
	$subjek2 		= mysqli_real_escape_string($db, $_POST['subjek2']);
	$description	= mysqli_real_escape_string($db, $_POST['description']);

	$sql			= mysqli_query($db, "UPDATE laycover SET subjek1 = '$subjek1',subjek2 = '$subjek2',description = '$description' WHERE id = '$id'");

	if($sql) {
		echo "<meta http-equiv='refresh' content='0;url=../layheadcover.php?status=editcover-sukses'>";
	} else {
		echo "<meta http-equiv='refresh' content='0;url=../layheadcover.php?status=editcover-gagal'>";
	}
	
} else if (isset($_POST['btneditservice'])) {

	$id 			= mysqli_real_escape_string($db, $_POST['id']);
	$subjek 		= mysqli_real_escape_string($db, $_POST['subjek']);
	$description	= mysqli_real_escape_string($db, $_POST['description']);
	$picture		= mysqli_real_escape_string($db, $_POST['picture']);

	$sql = mysqli_query($db, "UPDATE layservice SET subjek='$subjek',description='$description',picture='$picture' WHERE id='$id'");

	if($sql) {
		echo "<meta http-equiv='refresh' content='0;url=../layheadcover.php?status=editservice-sukses'>";
	} else {
		echo "<meta http-equiv='refresh' content='0;url=../layheadcover.php?status=editservice-gagal'>";
	}
	
} elseif (isset($_POST['btneditprice'])) {
	$id 			= mysqli_real_escape_string($db, $_POST['id']);
	$subjek 		= mysqli_real_escape_string($db, $_POST['subjek']);
	$pricing 		= mysqli_real_escape_string($db, $_POST['pricing']);
	$description1	= mysqli_real_escape_string($db, $_POST['description1']);
	$description2	= mysqli_real_escape_string($db, $_POST['description2']);
	$description3	= mysqli_real_escape_string($db, $_POST['description3']);
	$description4	= mysqli_real_escape_string($db, $_POST['description4']);
	$description5	= mysqli_real_escape_string($db, $_POST['description5']);

	$sql			= mysqli_query($db, "UPDATE layprice SET subjek = '$subjek',pricing = '$pricing',description1 = '$description1',description2 = '$description2',description3 = '$description3',description4 = '$description4',description5 = '$description5' WHERE id = '$id'");

	if($sql) {
		echo "<meta http-equiv='refresh' content='0;url=../layheadcover.php?status=editprice-sukses'>";
	} else {
		echo "<meta http-equiv='refresh' content='0;url=../layheadcover.php?status=editprice-gagal'>";
	}

} elseif (isset($_POST['btneditbarber'])) {
	$id 			= mysqli_real_escape_string($db, $_POST['id']);
	$barber 		= mysqli_real_escape_string($db, $_POST['barber']);
	$description 	= mysqli_real_escape_string($db, $_POST['description']);

	$sql			= mysqli_query($db, "UPDATE laybarber SET barber='$barber', description='$description' WHERE id = '$id'");

	if($sql) {
		echo "<meta http-equiv='refresh' content='0;url=../layheadcover.php?status=editbarber-sukses'>";
	} else {
		echo "<meta http-equiv='refresh' content='0;url=../layheadcover.php?status=editbarber-gagal'>";
	}

} else if (isset($_POST['btneditfaq'])) {

	$id 		= mysqli_real_escape_string($db, $_POST['id']);
	$question 	= mysqli_real_escape_string($db, $_POST['question']);
	$answer		= mysqli_real_escape_string($db, $_POST['answer']);

	$sql		= mysqli_query($db, "UPDATE layfaq SET question = '$question',answer = '$answer' WHERE id = '$id'");

	if($sql) {
		echo "<meta http-equiv='refresh' content='0;url=../layheadcover.php?status=editfaq-sukses'>";
	} else {
		echo "<meta http-equiv='refresh' content='0;url=../layheadcover.php?status=editfaq-gagal'>";
	}
	
} elseif (isset($_POST['btneditorderlist'])) {
	$id 		 = mysqli_real_escape_string($db, $_POST['id']);
	$username 	 = mysqli_real_escape_string($db, $_POST['username']);
	$email 		 = mysqli_real_escape_string($db, $_POST['email']);
	$phone		 = mysqli_real_escape_string($db, $_POST['phone']);
	$subjek		 = mysqli_real_escape_string($db, $_POST['subjek']);
	$datebooking = mysqli_real_escape_string($db, $_POST['datebooking']);
	$timebooking = mysqli_real_escape_string($db, $_POST['timebooking']);
	$message	 = mysqli_real_escape_string($db, $_POST['message']);
	$status	 = mysqli_real_escape_string($db, $_POST['status']);

	$sql = mysqli_query($db, "UPDATE custorder SET username = '$username',email = '$email',phone = '$phone',subjek = '$subjek',datebooking = '$datebooking',timebooking = '$timebooking',message = '$message',status = '$status' WHERE id = '$id'");

	if($sql) {
		echo "<meta http-equiv='refresh' content='0;url=../dashboard.php?status=editorder-sukses'>";
	} else {
		echo "<meta http-equiv='refresh' content='0;url=../dashboard.php?status=editorder-gagal'>";
	}
}
?>
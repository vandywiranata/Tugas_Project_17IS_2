<?php 
require "config.php";

function userverifikasi(){
	if (!isset($_SESSION['user'])) {
		header("location:login.php");
	}
}

function daftarUser(){
	global $db;
	$sql = "SELECT * FROM reglogin";

	$hasil = $db->query($sql);

	if($hasil->num_rows > 0) {
		return $hasil;
	} else {
		echo("Tidak Ada Data");
	}
}

function daftarBooking(){
	global $db;
	$sql = "SELECT * FROM custorder";

	$hasil = $db->query($sql);

	if($hasil->num_rows > 0) {
		return $hasil;
	} else {
		echo("Tidak Ada Data");
	}
}

function layheadtitle(){
	global $db;
	$sql = "SELECT * FROM laytitle";

	$hasil = $db->query($sql);

	if($hasil->num_rows > 0) {
		return $row = mysqli_fetch_assoc($hasil);
	} else {
		echo("Tidak Ada Data");
	}
}

function layheadcover(){
	global $db;
	$sql = "SELECT * FROM laycover";

	$hasil = $db->query($sql);

	if($hasil->num_rows > 0) {
		return $row = mysqli_fetch_assoc($hasil);
	} else {
		echo("Tidak Ada Data");
	}
}

function layheadservice(){
	global $db;
	$sql = "SELECT * FROM layservice";

	$hasil = $db->query($sql);

	if($hasil->num_rows > 0) {
		return $hasil;
	} else {
		echo("Tidak Ada Data");
	}
}

function layheadprice(){
	global $db;
	$sql = "SELECT * FROM layprice";

	$hasil = $db->query($sql);

	if($hasil->num_rows > 0) {
		return $row = mysqli_fetch_assoc($hasil);
	} else {
		echo("Tidak Ada Data");
	}
}

function layheadfaq(){
	global $db;
	$sql = "SELECT * FROM layfaq";

	$hasil = $db->query($sql);

	if($hasil->num_rows > 0) {
		return $row = mysqli_fetch_assoc($hasil);
	} else {
		echo("Tidak Ada Data");
	}
}

function daftarLaytitle(){
	global $db;
	$sql = "SELECT * FROM laytitle";

	$hasil = $db->query($sql);

	if($hasil->num_rows > 0) {
		return $hasil;
	} else {
		echo("Tidak Ada Data");
	}
}

function daftarLaycover(){
	global $db;
	$sql = "SELECT * FROM laycover";

	$hasil = $db->query($sql);

	if($hasil->num_rows > 0) {
		return $hasil;
	} else {
		echo("Tidak Ada Data");
	}
}

function daftarLayservice(){
	global $db;
	$sql = "SELECT * FROM layservice";

	$hasil = $db->query($sql);

	if($hasil->num_rows > 0) {
		return $hasil;
	} else {
		echo("Tidak Ada Data");
	}
}

function daftarLayprice(){
	global $db;
	$sql = "SELECT * FROM layprice";

	$hasil = $db->query($sql);

	if($hasil->num_rows > 0) {
		return $hasil;
	} else {
		echo("Tidak Ada Data");
	}
}

function daftarLayfaq(){
	global $db;
	$sql = "SELECT * FROM layfaq";

	$hasil = $db->query($sql);

	if($hasil->num_rows > 0) {
		return $hasil;
	} else {
		echo("Tidak Ada Data");
	}
}


?>
<?php
include "config.php";

	$nik = $_POST['txt_nik'];
	$fname = $_POST['txt_fname'];
	$lname = $_POST['txt_lname'];
	$email = $_POST['txt_email'];
	$division = $_POST['txt_division'];
	
			// Proses simpan ke Database
			$query = "INSERT INTO biodata(nik, fname, lname, email, division) VALUES('".$nik."','".$fname."','".$lname."','".$email."','".$phone."','".$division."')";
			$sql = mysqli_query($link, $query); // Eksekusi/ Jalankan query dari variabel $query
				
?>

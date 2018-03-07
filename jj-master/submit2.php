<?php 

if(isset($_POST['username'])){

		$username = $_POST['username'];

		$link = mysqli_connect("localhost", "root", "", "magang");
		 
		// jalankan query
		$sql = "SELECT * FROM biodata WHERE username = '$username'";
		$result = mysqli_query($link, $sql);

		$show = mysqli_fetch_array($result, MYSQLI_ASSOC);

		echo json_encode($show);
		exit;
}

 ?>
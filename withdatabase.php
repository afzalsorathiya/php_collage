<?php
	$con = mysqli_connect("localhost","root","","dbdemo") or die("Connection Problem");
	if(isset($_POST['btnsave']))
	{
		$name = $_POST["txtname"];
		$course = $_POST["txtcourse"];
		$city = $_POST["txtcity"];
		$q ="INSERT INTO demo_master (name,course,city) VALUES('$name','$course','$city')";
		mysqli_query($con, $q);
		header("location:index.php");
	}
?>0

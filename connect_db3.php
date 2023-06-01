<?php
	$location = $_POST['location'];
	$date = $_POST['date'];
	$time = $_POST['time'];

	// Database connection
	$conn = new mysqli('localhost','root','','parking');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into smart_parking(location,date,time) values(?, ?, ?)");
		$stmt->bind_param("sss", $location, $date, $time);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration-successfully...";
		$stmt->close();
		$conn->close();
	}
?>
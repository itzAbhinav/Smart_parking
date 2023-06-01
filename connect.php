<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coming Soon</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			text-align: center;
		}
		h1 {
			font-size: 48px;
			margin-top: 100px;
			color: #333;
		}
		p {
			font-size: 24px;
			margin-top: 50px;
			color: #777;
		}
	</style>
</head>
<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, email, password, number) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $firstName, $lastName, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Registration-successfully...";
		$stmt->close();
		$conn->close();
	}
?>
<body>
    <br><br><br><br><br>
	<h1>Registration-successfully</h1>
	<br><br><br><br>
	<button onclick="location.href='fetch_data.php'" type="button" style="margin-left: 10px;border-radius: 5px;">
  Next Page</button>
	<!--<p>Parking Spot is under construction. Stay tuned for updates!</p>-->
</body>
</html>
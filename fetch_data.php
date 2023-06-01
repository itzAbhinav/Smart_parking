<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
margin-left: 300px;
border-collapse: collapse;
width: 70%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
<link rel="stylesheet" href="home.css">
</head>
<header>
    <h1 style="font-size: 30px; font-weight: 800;">
      Smart Parking
    </h1>
  </header>
<body>
<h1 style="text-align:center ; font-family:monospace">Currently Parked Cars</h1>   
<table>
<tr>
<th>Parking Id</th>
<th>Firstname</th>
<th>LastName</th>
<th>Phone-No</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "test");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, firstName, lastName, number FROM registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstName"] . "</td><td>"
. $row["lastName"]. "</td><td>" . $row["number"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<footer>
		<p>&copy; 2023 Smart Parking</p>
	</footer>
</body>
</html>
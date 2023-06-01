<?php
session_start();
$con = mysqli_connect("localhost","root","","parking");

if(isset($_POST['submit_response']))
{
    $location = $_POST['location'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $query = "INSERT INTO smart_parking (location,date,time) VALUES ('$location','$date ','$time')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Response Successfully saved";
        header("Location: gt1.php");
    }
    else
    {
        $_SESSION['status'] = " Not Inserted";
        header("Location: gt1.php");
    }
}
?>
<?php
session_start();
include 'connect.php';

$visitorname = $_POST['visitorname'];
$prisonername= $_POST['prisonername'];
$date=$_POST['date'];
$contactnumber = $_POST['contactnumber'];
$time = $_POST['time'];

$submitdata="INSERT INTO visitor_records (visitorname,prisonername,date,contactnumber,time) VALUES ('$visitorname','$prisonername','$date','$contactnumber','$time')";
$result = $conn->query($submitdata);
header('location:admin_page.html');
?>
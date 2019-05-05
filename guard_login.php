<?php
session_start();
include 'connect.php';

$name = $_POST["guardname"];
$pass = $_POST["guardpassword"];

$val = "SELECT * FROM guard_login_data WHERE guardname='$name' AND guardpassword='$pass'";
$result = mysqli_query($conn,$val);

$num = mysqli_num_rows($result);

if ($num == 1){
	$_SESSION['name'] = $name;
	header('location:guard_page.php');
}
else {
	echo "not logged in";
}

?>
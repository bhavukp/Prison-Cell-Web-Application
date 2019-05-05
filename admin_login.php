<?php
session_start();
include 'connect.php';

$name = $_POST["adminname"];
$pass = $_POST["adminpassword"];

$val = "SELECT * FROM admin_login_data WHERE adminname='$name' AND adminpassword='$pass'";
$result = mysqli_query($conn,$val);

$num = mysqli_num_rows($result);

if ($num == 1){
	$_SESSION['name1'] = $name;
	header('location:admin_page.php');
}
else {
	echo "not logged in";
}

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";
session_start();

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

$sql="delete from user where ID =".$_SESSION['ID'];
$result=mysqli_query($conn,$sql);
if($result)
{
	session_destroy();
	/* Complete */
	header("Location:index.php");
}
else
{
	echo $sql;
}

?>

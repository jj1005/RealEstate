<?php
include"databaseconn.php";
session_start();
$sql="delete from users where id='".$_SESSION['ID']."';";
$result=mysqli_query($conn,$sql);
if($result)
{
	
	session_unset();
session_destroy();
	header("Location:home.php");
}
else
{
	echo $sql;
}
		
?>
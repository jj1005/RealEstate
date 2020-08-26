<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="realestate";


//creat connection 
$conn=new mysqli($servername, $username, $password, $dbname);

	$result = mysqli_query($conn,'select * from help');
	
	//recieve data and delete record by id
	if(isset($_GET["data"])){
		$dataArr = $_GET["data"];
		foreach($dataArr as $ID){
		 mysqli_query($conn,"DELETE FROM help where ID='$ID'");
		}
		echo "record succefully deleted";
		}

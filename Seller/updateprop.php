<?php 

include "editprop.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset ($_POST ['update'] ))
{
   
    $id = $_POST['id'] ;
    $title = $_POST['title'] ;
    $price = $_POST['price'] ;
    $city = $_POST['city'];
    $area = $_POST['area'];
    $propertyType=$_POST['propertyType'];
    $noOfRooms=$_POST['noOfRooms'];
    $noOfBathrooms= $_POST['noOfBathrooms'] ;
    $picture= $_POST['picture'] ;
   
   


$sql = "UPDATE property SET
   title = '".$title."',
    price= '".$price."',
    area = '".$area."',
    propertyType='".$propertyType."',
    noOfRooms='".$noOfRooms."',
    picture='".$picture."',
    city='".$city."',
    noOfBathrooms= '".$noOfBathrooms."' WHERE ID = '".$id."' ";


    $result = mysqli_query( $conn , $sql );	


  
if($result)	
		{
			header("Location: ../seller/myprop.php");
		
		}
else
    {
		
    echo "<font color='red'>"."Connection Error"."</font>";
    echo $sql;
	}
}




?>
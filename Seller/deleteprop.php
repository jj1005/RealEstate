<?php

include "../welcome.php";
include "../menu.php";
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset ($_POST ['delete'] ))
{
	$id= $_POST['id'];

	$sql = "DELETE  FROM property where ID = '".$id."' ";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location: ../seller/myprop.php");
		
		}
	

     else {
            echo $sql;
        }
    }
        
    ?>


<html>

<head>
	<link rel="stylesheet" href="../css/linearicons.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/nice-select.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/ion.rangeSlider.css">
	<link rel="stylesheet" href="../css/ion.rangeSlider.skinFlat.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">




</head>

	


</html>
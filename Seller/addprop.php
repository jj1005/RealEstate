<link rel="shortcut icon" href="../img/fav.png">
<?php
if (!isset($_SESSION)) {
	session_start();
}
include "../welcome.php";
include "../menu.php";
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";

$conn = new mysqli($servername, $username, $password, $dbname);


if (isset($_POST['add'])) //check if form was submitted

{
	if (isset($_POST['test']) == "on") {
		$type = "yes";
	} else {
		$type = "no";
	}
	$sql = "insert into property (city,promoted,title,area,propertyType,noOfRooms,noOfBathrooms,price,picture,ownerID) values('" . $_POST["city"] . "', '" . $type . "', '" . $_POST["title"] . "','" . $_POST["area"] . "','" . $_POST["propertyType"] . "','" . $_POST["noOfRooms"] . "','" . $_POST["noOfBathrooms"] . "','" . $_POST["price"] . "','" . $_POST["image"] . "','" . $_SESSION['ID'] . "')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location: ../seller/myprop.php");
	} else {
		echo $sql;
	}
}



?>


<html>
<?php
include "../head.php";

?>



<body>
	<form action="" method="post">
		<section class="property-area section-gap relative" id="property">

			<div class="overlay overlay-bg"></div>

			<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 header-text">
					<h1>Add your Property </h1>

				</div>
			</div>

			<div class="containerr">


				<div class="col-lg-4 col-md-6">
					<div class="form-row  ">
						<div class="single-property">
							<div class="images">
								<input type="file" name="picture" id="image">
							</div>
							<div class="desc">

								<div class="top d-flex justify-content-between">
									<b> <span>For <h3> <input type="text" name="propertyType" placeholder="Property Type" id="propertyType" required="required"> </h3></span>

										<b> Property <h3><input type="text" name="title" placeholder="Title" required="required"></h3>
											In <h3><input type="text" name="city" placeholder="City" required="required"></h3>

											<b>EGP<h3><input type="text" name="price" placeholder="Price" id="price" required="required"></h3> </b>
								</div>
								<div class="d-flex justify-content-start">
									<p>Number of Beds: <h4><input type="text" name="noOfRooms" placeholder="Number of rooms" id="noOfRooms" required="required"></h4>
									</p>
									<p>Number of Bathrooms: <h4><input type="text" name="noOfBathrooms" placeholder="Number of bathrooms" id="noOfBathrooms" required="required"></h4>

									</p>
									<p>Area(m):<h4><input type="text" name="area" placeholder="Area" id="area" required="required"></h4>
									</p>
								</div>


								<p> Promote your property for extra 200 EGP: </p>
								<div class="d-flex justify-content-start">
									<div class="onoffswitch3 d-block mx-auto">
										<input type="checkbox" name="test" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
										<label class="onoffswitch3-label" for="myonoffswitch3">

											<span class="onoffswitch3-inner">
												<span class="onoffswitch3-active">
													<span class="onoffswitch3-switch">Yes</span>
													<span class="lnr lnr-arrow-right"></span>
												</span>
												<span class="onoffswitch3-inactive">
													<span class="lnr lnr-arrow-left"></span>
													<span class="onoffswitch3-switch">No</span>
												</span>
											</span>
										</label>
									</div>



								</div>

								<input type="submit" class="primary-btn2 mt-50" style="width:100%; height:100%; border: 1px solid" value="Add" name="add" style="width:100%; height:100%; border: 1px solid ">

							</div>

						</div>




					</div>

		</section>
	</form>
</body>

</html>
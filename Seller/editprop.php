<?php

include "../welcome.php";
include "../menu.php";
include "../head.php";
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['edit'])) {



	$id = $_POST['id'];

	$sql = "SELECT * FROM property where ID = '" . $id . "'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		while ($row = mysqli_fetch_array($result)) {
			$title = $row['title'];

			$price = $row['price'];
			$area = $row['area'];
			$propertyType = $row['propertyType'];
			$noOfRooms = $row['noOfRooms'];
			$noOfBathrooms = $row['noOfBathrooms'];
			$picture = $row['picture'];
			$city = $row['city'];
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

		<body>

			<section class="property-area section-gap relative" id="property">

				<div class="overlay overlay-bg"></div>

				<div class="row d-flex justify-content-center">
					<div class="col-md-8 pb-40 header-text">
						<h1>Edit your Property </h1>

					</div>
				</div>

				<div class="containerr">


					<div class="col-lg-4 col-md-6">
						<div class="form-row  ">
							<div class="single-property">
								<form name="update" method="post" action="updateprop.php">
									<img class="img-fluid mx-auto d-block" src="<?php echo "/realestate/img/" .  $picture; ?>" alt="" width=100%>
									<br>
									<div class="images">

										<input type="file" name="picture" id="image" value="<?php echo "http://localhost/realestate/img/ "  . $picture; ?>">


									</div>

									<b><span>For <h3> <input type="text" name="propertyType" value="<?php echo $propertyType; ?>" id="propertyType" required="required"> </h3></span>
										Property Title<h3><input type="text" name="title" value="<?php echo $title; ?>" required="required"></h3>

										<span> In <h3> <input type="text" name="city" value="<?php echo $city; ?>" id="location" required="required"> </h3>

											<div class="desc">
												<div class="top d-flex justify-content-between">


													<b>EGP<h3><input type="text" name="price" value="<?php echo $price; ?>" id="price" required="required"></h3> </b>
												</div>
												<div class="middle">
													<div class="d-flex justify-content-start">
														<p>No of Beds: <h4><input type="text" name="noOfRooms" value="<?php echo $noOfRooms; ?>" id="noOfRooms" required="required"></h4>
														</p>
														<p>No of Bathrooms: <h4><input type="text" name="noOfBathrooms" value="<?php echo $noOfBathrooms; ?>" id="noOfBathrooms" required="required"></h4>
														</p>
														<p>Area(m):<h4><input type="text" name="area" value="<?php echo $area; ?>" id="area" required="required"></h4>
														</p>

													</div>
												</div>
											</div>
											<input type="hidden" name="id" value=<?php echo $id; ?>>
											<input type="submit" name="update" style="width:100%; height:100%; border: 1px solid " value="Update" class="primary-btn2 mt-50">

								</form>

							</div>
						</div>

					</div>
				</div>

			</section>

	<?php

	} else {
		echo $sql;
	}
}

	?>
		</body>

		</html>
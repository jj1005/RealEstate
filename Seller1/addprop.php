<link rel="shortcut icon" href="../img/fav.png">
<?php
if (!isset($_SESSION)) {
	session_start();
}
include "../welcome.php";
?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";

$conn = new mysqli($servername, $username, $password, $dbname);


if (isset($_POST['add'])) //check if form was submitted

{
	$sql = "insert into property (title,area,propertyType,noOfRooms,noOfBathrooms,price,image,ownerID) values('" . $_POST['title'] . "','" . $_POST['area'] . "','" . $_POST['propertyType'] . "','" . $_POST['noOfRooms'] . "','" . $_POST['noOfBathrooms'] . "','" . $_POST['price'] . "','" . $_POST['image'] . "','" . $_SESSION['ID'] . "')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location:../menu.php");
	} else {
		echo $sql;
	}
}

include "../menu.php";


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

			<div class="container" padding-left="150px">


				<div class="col-lg-4 col-md-6">
					<div class="form-row  ">
						<div class="single-property">
							<div class="images">


								<input type="file" name="image" id="image">


							</div>
							<span>For <h3> <input type="text" name="propertyType" placeholder="propertyType" id="propertyType" required="required"> </h3></span>

							<div class="desc">
								<div class="top d-flex justify-content-between">





									<h3><input type="text" name="title" placeholder="title" required="required"></h3>

									<b>$<h3><input type="text" name="price" placeholder="price" id="price" required="required"></h3> </b>
								</div>
								<div class="middle">
									<div class="d-flex justify-content-start">
										<p>Bed: <h4><input type="text" name="noOfRooms" placeholder="number of rooms" id="noOfRooms" required="required"></h4>
										</p>
										<p>Bath: <h4><input type="text" name="noOfBathrooms" placeholder="no of bathrooms" id="noOfBathrooms" required="required"></h4>

										</p>
										<p>Area:<h4><input type="text" name="area" placeholder="area" id="area" required="required">m</h4>
										</p>
									</div>
									<div class="d-flex justify-content-start">



										<p>Pool: <span class="rd">No</span></p>
										<p>Internet: <span class="rd">No</span></p>
										<p>Cleaning: <span class="rd">No</span></p>
									</div>
								</div>

								<div class="bottom d-flex justify-content-start">
									<p><span class="lnr lnr-heart"></span> 15 Likes</p>
									<p><span class="lnr lnr-bubble"></span> 02 Comments</p>

								</div>
								<input type="submit" value="add" name="add">
							</div>
						</div>

					</div>




				</div>

		</section>
	</form>
</body>

</html>
<?php


error_reporting(0);
include "buyer/chatPop-up.php";
include "head.php";
?>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script>
	(function() {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script>
<?php

if (!isset($_SESSION)) {

	session_start();
}
$id = $_SESSION["ID"];


?>

<?php


$connection = mysqli_connect("localhost", "root", "", "realestate");

$query = "SELECT * FROM property join users  on property.ownerID = users.id WHERE (not property.ID in (SELECT propID FROM Request WHERE(userID = '" . $id . "' )))";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));



if (isset($_POST['request'])) //check if form was submitted

{
	$query2 = "insert into Request (propID,userID,SellerID) values('" . $_POST['propID'] . "','" . $_SESSION['ID'] . "','" . $_POST['sellerID'] . "')";


	$result2 = mysqli_query($connection, $query2);
}





?>
<section class="property-area section-gap relative" id="property">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8 pb-40 header-text">
				<h1>Our Top Rated Properties</h1>
				<p>
					Who are in extremely love with eco friendly system.
				</p>
			</div>
		</div>
		<div class="row">
			<?php while ($row = mysqli_fetch_array($result)) { ?>


				<div class="col-lg-4 col-md-6 pb-30">
					<div class=" single-property">
						<div class="images">
							<img class="img-fluid mx-auto d-block" src="<?php echo "/realestate/img/" . $row["picture"]; ?>" alt="" width=100%>

							<span>For <h3><?php echo $row["propertyType"]; ?></h3></span>

						</div>

						<div class="desc">
							<div class="top d-flex justify-content-between">


								<?php

								?>
								<h3><?php echo $row["title"]; ?></h3>
								<h3>In <?php echo $row["city"]; ?></h3>

								<b>$<h3><?php echo $row["price"]; ?></h3> </b>
							</div>
							<div class="middle">
								<div class="d-flex justify-content-start">
									<p>Bed: <h4><?php echo $row["noOfRooms"]; ?></h4>
									</p>
									<p>Bath: <h4><?php echo $row["noOfBathrooms"]; ?></h4>

									</p>
									<p>Area:<h4><?php echo $row["area"]; ?>m</h4>

									</p>
								</div>
								<div class="bottom d-flex justify-content-start">
									Owner : &#160 <h5><?php echo $row["fullname"]; ?></h5><br>

								</div>

								<br>
								<?php if ($_SESSION["role"] == "buyer") { ?>
									<form action="" method="post">


										<input type="hidden" name="propID" value="<?php echo $row['ID'] ?>" id="propID">
										<input type="hidden" name="sellerID" value="<?php echo $row['ownerID'] ?>" id="sellerID">
										<i class='fas fa-comment' style='font-size:48px;color:pink' data-toggle="tooltip" title="Press me to message the owner" onClick="openForm()"></i>


										<input type="submit" name="request" value="  Request" class="primary-btn2 mt-50" style="width:100%; height:100%; border: 1px solid">

									</form>

									<form action="gallerypics.php" method="post">


										<input type="hidden" name="propID" value="<?php echo $row['ID'] ?>" id="propID">
										<input type="submit" name="view property" value="view property" class="primary-btn2" style="width:100%; height:100%; border: 1px solid">
									<?php } ?>
							</div>


						</div>
					</div>
				</div>



			<?php } ?>
		</div>


	</div>
</section>
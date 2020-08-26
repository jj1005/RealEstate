<html>

<head>

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="../img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Real Estate - My properties</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

	<link rel="stylesheet" href="../css/linearicons.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/nice-select.css">
	<link rel="stylesheet" href="../css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="../css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
</head>

<body>
	<?php


	include "buyer-menu.php";
	include "databaseconn.php";
	?>

	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
				<div class="banner-content col-lg-12 col-md-12">
					<h1 class="text-uppercase">
						We’re Real Estate King
					</h1>
					<div class="search-field">
						<form class="search-form" action="result.php">
							<div class="row">
								<div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
									<div class="row">
										<div class="col">
											<h4 class="search-title">Search Properties For</h4>
										</div>
										<div class="col">
											<div class="onoffswitch3 d-block mx-auto">
												<input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
												<label class="onoffswitch3-label" for="myonoffswitch3">
													<span class="onoffswitch3-inner">
														<span class="onoffswitch3-active">
															<span class="onoffswitch3-switch">Sell</span>
															<span class="lnr lnr-arrow-right"></span>
														</span>
														<span class="onoffswitch3-inactive">
															<span class="lnr lnr-arrow-left"></span>
															<span class="onoffswitch3-switch">Rent</span>
														</span>
													</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-xs-6">
									<select name="location" class="app-select form-control" required>
										<option data-display="Choose locations">Choose locations</option>
										<option value="1">Alexandria</option>
										<option value="2">Aswan</option>
										<option value="3">Asyut</option>
										<option value="4">Behira</option>
										<option value="5">Beni Suef</option>
										<option value="6">Cairo</option>
										<option value="7">Dakahlya</option>
										<option value="8">Damietta</option>
										<option value="9">Faiyum</option>
										<option value="10">Gharbia</option>
										<option value="11">Giza</option>
										<option value="12">Ismailia</option>
										<option value="13">Kafr El Sheikh</option>
										<option value="14">Luxor</option>
										<option value="15">Matruh</option>
										<option value="16">Minya</option>
										<option value="17">Monufia</option>
										<option value="18">New Valley</option>
										<option value="19">North Sinai</option>
										<option value="20">Port Said</option>
										<option value="21">Qalyubia</option>
										<option value="22">Qena</option>
										<option value="23">Red Sea</option>
										<option value="24">Sharqia</option>
										<option value="25">Sohag</option>
										<option value="26">South Sinai</option>
										<option value="27">Suez</option>
									</select>
								</div>
								<div class="col-lg-3 col-md-6 col-xs-6">
									<select name="property-type" class="app-select form-control" required>
										<option data-display="Property Type">Property Type</option>
										<option value="1">Studio</option>
										<option value="2">Loft</option>
										<option value="3">Duplex</option>
										<option value="4">Villa</option>
									</select>
								</div>
								<div class="col-lg-3 col-md-6 col-xs-6">
									<select name="bedroom" class="app-select form-control" required>
										<option data-display="Bedrooms">Bedrooms</option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
										<option value="4">More</option>
									</select>
								</div>
								<div class="col-lg-3 col-md-6 col-xs-6">
									<select name="bedroom" class="app-select form-control" required>
										<option data-display="Bedrooms">Bathrooms</option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
										<option value="4">More</option>
									</select>
								</div>
								<div class="col-lg-4 range-wrap">
									<p>Price Range:</p>
									<input type="text" id="range" value="" name="range" />
								</div>
								<div class="col-lg-4 range-wrap">
									<p>Area Range(sqm):</p>
									<input type="text" id="range2" value="" name="range" />
								</div>
								<div class="col-lg-4 d-flex justify-content-end">
									<button class="primary-btn mt-50" style="height: 45px;">Search Properties<span class="lnr lnr-arrow-right"></span></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php
	include "property-buyer.php";
	include "footer.php";
	?>





	<body>

</html>
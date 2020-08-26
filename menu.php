<nav class="navbar navbar-expand-lg  navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="index.php">
			<img src="http://localhost/realestate/img/logo.png" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">

			<?php
			if (!isset($_SESSION)) {
				session_start();
			}
			if (!empty($_SESSION["email"])) {

				if (($_SESSION["role"]) == "seller") {
					echo "<ul class=\"navbar-nav\" >";
					echo "<li> <a href='http://localhost/realestate/index.php#home'> Home";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/index.php#service'>Service";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/index.php#property'>Properties";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/index.php#contact'>Inbox";
					echo "</li></a>";
					echo "<li><a href='#'>Help";
					echo "</li></a>";

					echo "<li> <a href='http://localhost/realestate/seller/addprop.php'>Add property";
					echo "</li></a></ul>";
				} else if (($_SESSION["role"]) == "buyer") {
					echo "<ul class=\"navbar-nav\" >";
					echo "<li> <a href='http://localhost/realestate/index.php#home'> Home";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/index.php#service'>Service";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/index.php#property'>Properties";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/index.php#contact'>Contact";
					echo "</li></a>";
					echo "<li><a href='#'>Help";
					echo "</li></a>";
					echo "<li> <a href='http://localhost/realestate/buyer/profile.php'>view profile";
					echo "</li></a></ul>";
				}
			} else {
				echo "<ul class=\"navbar-nav\" >";
				echo "<li> <a href=http://localhost/realestate/index.php#home> Home";
				echo "</li></a>";
				echo "<li><a href='http://localhost/realestate/index.php#service'>Service";
				echo "</li></a>";
				echo "<li><a href='http://localhost/realestate/index.php#property'>Properties";
				echo "</li></a>";
				echo "<li><a href='http://localhost/realestate/index.php#contact'>Contact";
				echo "</li></a>";
				echo "<li><a href='#'>Help";
				echo "</li></a>";
				echo "<li><a href='elements.php'>Elements";
				echo "</li></a></ul>";
			}



			?>

		</div>
	</div>

</nav>
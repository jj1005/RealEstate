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

?>

<?php
include "../head.php";
?>



<body>
    <section class="generic-banner relative">
        <nav class="navbar navbar-expand-lg  navbar-light bg-light">
            <div class="container">
                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                    <?php


                    echo "<ul class=\"navbar-nav\" >";
                    echo "<li> <a href='#'>Edit";
                    echo "</li> </a>";
                    echo "<li> <a href='account/deleteacc.php'>Delete Account";
                    echo "</li></a></ul>";

                    ?>
                </div>
            </div>
        </nav>

    </section><br><br>
    <section class="property-area   ">


        <div class="progress-table-wrap">

            <div class="progress-table">
                <div class="table-head">
                    <div class="serial">Id</div>
                    <div class="serial">Fullname</div>
                    <div class="serial">Email</div>

                </div>
                <div class="table-row">
                    <div class="serial"> <?php echo $_SESSION["ID"]  ?> </div>
                    <div class="serial"><?php echo $_SESSION["fullname"] ?></div>
                    <div class="serial"><?php echo $_SESSION["email"] ?></div>
                </div>
            </div>
        </div>
</body>
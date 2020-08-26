<?php
if (!isset($_SESSION)) {
    session_start();
}
if (($_SESSION["role"]) == "seller") {

    echo '<script>window.location.href= "http://localhost/realestate/seller/sellerprofile.php";</script>';
} else if (($_SESSION["role"]) == "buyer") {
    echo '<script>window.location.href= "http://localhost/realestate/seller/sellerprofile.php";</script>';
} else {
    echo "<ul class=\"navbar-nav\" >";
    echo "<li> <a href='#'> Welcome ";
    echo "</li></a>";
    echo "<li> <a href='#'> +12312-3-1209";
    echo "</li></a>";
    echo "<li><a href='account/login.php'>Login / Register";
    echo "</li></a></ul>";
}
?>

<?php
include "../head.php";
?>


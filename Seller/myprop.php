<link rel="shortcut icon" href="../img/fav.png">
<!DOCTYPE html>
<html lang="zxx" class="no-js">


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
    <link rel="stylesheet" href="../main2.css">
</head>

<body>




    <!-- Start Header Area -->
    <header class="default-header">

        <?php include "../welcome.php";
        include "../menu.php"; ?>


    </header>
    <!-- End Header Area -->

    <?php
    $id = $_SESSION["ID"];

    $connection = mysqli_connect("localhost", "root", "", "realestate");

    $query = "SELECT * FROM property WHERE( ownerID = '" . $id . "')";
    $result = mysqli_query($connection, $query);
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
                        <div class="single-property">
                            <form name="edit" method="post" action="editprop.php">
                                <div class="images">
                                    <img class="img-fluid mx-auto d-block" src="<?php echo "/realestate/img/" . $row["picture"]; ?>" alt="" width=100%>

                                    <span>For <h3><?php echo $row["propertyType"]; ?></h3></span>

                                </div>

                                <div class="desc">
                                    <div class="top d-flex justify-content-between">

                                        <h3> <?php echo $row["title"]; ?></h3>
                                        <h3> In <?php echo $row["city"]; ?></h3>

                                        <b>EGP<h3><?php echo $row["price"]; ?></h3> </b>
                                    </div>
                                    <div class="middle">
                                        <div class="d-flex justify-content-start">
                                            <p>Bed: <h4><?php echo $row["noOfRooms"]; ?></h4>
                                            </p>
                                            <p>Bath: <h4><?php echo $row["noOfBathrooms"]; ?></h4>

                                            </p>
                                            <p>Area:<h4><?php echo $row["area"]; ?>m</h4>
                                            </p>
                                            <br>

                                        </div>

                                    </div>

                                    <input type="hidden" name="id" value=<?php echo $row["ID"]; ?>>
                                    <input type="submit" name="edit" class="primary-btn2 mt-50" style="width:100%;  border: 1px solid" border: 1px solid " value=" Edit">


                            </form>
                            <form name="edit" method="post" action="deleteprop.php">
                                <input type="hidden" name="id" value=<?php echo $row["ID"]; ?>>
                                <input type="submit" name="delete" class="primary-btn2 " style="width:100%;  border: 1px solid" value=" Delete">

                            </form>

                        </div>
                    </div>
            </div>



        <?php } ?>
        </div>


        </div>
    </section>



    <script src="../js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="../js/vendor/bootstrap.min.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/ion.rangeSlider.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
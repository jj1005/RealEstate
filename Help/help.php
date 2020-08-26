<html>



<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Real Estate</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="../css/linearicons.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/nice-select.css">
	<link rel="stylesheet" href="../css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="../css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
</head>
<?php include "../welcome.php";
		include "../menu.php"; ?>
<head>
<meta charset="utf-8">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script>



var count=0;
function search_term()

    {
		
		var rows=document.getElementById('result').rows.length;
		if(window.count == 0){
		for(var i=0;i<rows-1;i++){
			
			document.getElementById("result").deleteRow(i);
			
		}
		count=1;
		} 
        jQuery.ajax
                ({
                    type: 'post',
                    url: 'saerchAjax.php',
                        data:"search="+$("#search").val(),
                    success: function (data) {
			            $("#result").html(data);
		             }
		
                });
    }
</script>

</head>

<h3 >FAQ</h3>

<?php
if (($_SESSION["role"]) == "admin"){
echo "<nav class='navbar navbar-expand-sm bg-light navbar-light'>";
  echo "<ul class='navbar-nav'>";
	


				
					
				    echo"<li class=nav-item active><a class='nav-link' href='addHelp.php' >Add</a></li>";
					echo"<li class=nav-item active><a class='nav-link' href='UpdateHelp.php'>Update</a></li>";
				
				
            

echo "</ul>";
echo "</nav>";
} ?>	

	 <?php

$connection = mysqli_connect("localhost", "root", "", "realestate");
   
$sql="SELECT * FROM help";
    
	 $select = mysqli_query($connection,$sql );	
    
 ?>
 <body>
                      <table  class="table table-hover" id ="result" >
					  <thead class="thead-dark">
                           <tr>
                                  <th>Question</th>
                                        <th>Answer</th>

                                    </tr>
									</thead>
									<tbody>
                                      <?php
	
                                         while ($row = mysqli_fetch_array($select)) 
                                           {
                                            ?>
                                                    <tr ID="row<?php echo $row['ID']; ?>">
                                                    <td ID="question<?php echo $row['ID']; ?>"><?php echo $row['question']; ?></td>
                                                    <td ID="answer<?php echo $row['ID']; ?>"><?php echo $row['answer']; ?></td>

                                    </tr>
                                           <?php
                                            }
                                            ?>
							</tbody>				
	                        </table>
							<form class="form-inline  " method="post" >
              <label class="mr-sm-2"> <h4> search here:</h4></label>
                  <input type="text" class="form-control mb-2 mr-sm-2"  name="search" id="search" placeholder="Enter Your search Here" onKeyup='search_term()' >
	</form>	 
	
			
</body>
</html>
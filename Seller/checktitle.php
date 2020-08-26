<?php
session_start();

$org= $title;
$Title= $_POST['title'];
$Title= filter_var( $name , FILTER_SANITIZE_STRING );
          if ( str_word_count( $name )== 1 ){
	if( preg_match( "/[^a-zA-Z\s'-]/" , $Title )){
	echo "<font color='red'>"."Invalid name"."</font>";
	                                            }
												
	else{
		$_POST['name']= $Title;
		 echo "<font color='green'>"."Valid"."</font>";
	    }
		
	                                         }
    else{
          echo "<font color='red'>"."Must have first and last name"."</font>";
        }


?>
<?php

	/* 서버 접속 */
	require_once("./dbconfig.php");		
 	
 	settype( $_POST['no'], "integer");

  $filtered = array(
   'no'=>mysqli_real_escape_string($conn, $_POST['no']),
  );
  
    
  
  $sql = "delete from pf_list
 						where no={$filtered['no']}  						
  				";
  			
 	$result = mysqli_query($conn, $sql);
  
  
  //echo '<script>';
	//echo 'console.log("'.$sql.'")';
	//echo '</script>';
 
?>


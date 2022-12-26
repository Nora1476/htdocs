<?php

	/* 서버 접속 */
  $servername = "43.201.87.32";
  $user = "mulzoo1";
  $password = "mulzoo@#34";
  $dbname = "web_1";
  
  $conn = mysqli_connect($servername, $user, $password, $dbname);
 	
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


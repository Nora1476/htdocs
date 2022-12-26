<?php

	/* 서버 접속 */
  $servername = "43.201.87.32";
  $user = "mulzoo1";
  $password = "mulzoo@#34";
  $dbname = "web_1";
  
  $conn = mysqli_connect($servername, $user, $password, $dbname);
  	

  $filtered = array(
   'file'=>mysqli_real_escape_string($conn, $_POST['file']),
  );
  
  
  
  $sql = "delete from pf_img
 						where file='{$filtered['file']}'				
  				";
  		
	echo '<script>';
	echo 'console.log("'.$sql.'")';
	Echo '</script>';
 
	$result = mysqli_query($conn, $sql);
  

 
?>


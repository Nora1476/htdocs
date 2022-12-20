<?php

	/* 서버 접속 */
  $servername = "43.201.87.32";
  $user = "mulzoo1";
  $password = "mulzoo@#34";
  $dbname = "web_1";
  
  $conn = mysqli_connect($servername, $user, $password, $dbname);
 	
 	settype( $_POST['id'], "integer");
  $filtered = array(
   'id'=>mysqli_real_escape_string($conn, $_POST['id']),
  );
  
  $sql = " delete from gongan
 						where id={$filtered['id']}  						
  				";
  			
  $result = mysqli_query($conn, $sql);
  
  
 
?>
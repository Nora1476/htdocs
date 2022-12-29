<?php

	/* 서버 접속 */
  $servername = "43.201.87.32";
  $user = "mulzoo1";
  $password = "mulzoo@#34";
  $dbname = "web_1";
  
  $conn = mysqli_connect($servername, $user, $password, $dbname);
  
  
  if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
  
  ?>
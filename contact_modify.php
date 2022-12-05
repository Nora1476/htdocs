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
   'name'=>mysqli_real_escape_string($conn, $_POST['name']),
   'email'=>mysqli_real_escape_string($conn, $_POST['email']),
   'phone'=>mysqli_real_escape_string($conn, $_POST['phone']),
   'description'=>mysqli_real_escape_string($conn, $_POST['description'])
  );
  
  $sql = " update contact 
  					set
  						name = '{$filtered['name']}',
  						email = '{$filtered['email']}',
  						phone = '{$filtered['phone']}',
  						description = '{$filtered['description']}'
  					where id={$filtered['id']}  						
  			";
  			
  $result = mysqli_query($conn, $sql);
  
  if($result ===false){
  	echo "수정과정에서 오류";
  	error_log(mysqli_error($conn));
  } else {
  	echo "저장성공";
  }
 		
 
 
 
?>
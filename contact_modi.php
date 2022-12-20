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
		'phone'=>mysqli_real_escape_string($conn, $_POST['phone']),
		'location'=>mysqli_real_escape_string($conn, $_POST['location']),
		'lease_agreement'=>mysqli_real_escape_string($conn, $_POST['lease_agreement']),
		'type'=>mysqli_real_escape_string($conn, $_POST['type']),
		'content'=>mysqli_real_escape_string($conn, $_POST['content']),
  );
  
  $sql = " update gongan 
  					set
  						name = '{$filtered['name']}',
  						phone = '{$filtered['phone']}',
  						location = '{$filtered['location']}',
  						lease_agreement = '{$filtered['lease_agreement']}',
  						type = '{$filtered['type']}',
  						content = '{$filtered['content']}' 
  					where id={$filtered['id']}  						
  			";
  			
  $result = mysqli_query($conn, $sql);
  
  if($result ===false){
  	echo "수정과정에서 오류";
  	error_log(mysqli_error($conn));
  }
 
?>
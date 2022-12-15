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
   'position'=>mysqli_real_escape_string($conn, $_POST['position']),
   'office'=>mysqli_real_escape_string($conn, $_POST['office']),
   'extn'=>mysqli_real_escape_string($conn, $_POST['extn']),
   'salary'=>mysqli_real_escape_string($conn, $_POST['salary'])
  );
  
  $sql = " update employee 
  					set
  						name = '{$filtered['name']}',
  						position = '{$filtered['position']}',
  						office = '{$filtered['office']}',
  						extn = '{$filtered['extn']}',
  						salary = '{$filtered['salary']}'
  					where id={$filtered['id']}  						
  			";
  			
  $result = mysqli_query($conn, $sql);
  
  if($result ===false){
  	echo "수정과정에서 오류";
  	error_log(mysqli_error($conn));
  }else {
  	echo "저장성공";
  }
 		
?>
 
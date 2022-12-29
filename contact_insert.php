<?php

	require_once("./dbconfig.php");	
  
  
   $filtered = array(
    'name'=>mysqli_real_escape_string($conn, $_POST['name']),
    'phone'=>mysqli_real_escape_string($conn, $_POST['phone']),
		'location'=>mysqli_real_escape_string($conn, $_POST['location']),
		'lease_agreement'=>mysqli_real_escape_string($conn, $_POST['lease_agreement']),
		'type'=>mysqli_real_escape_string($conn, $_POST['type']),
		'content'=>mysqli_real_escape_string($conn, $_POST['content']),   
    
  );
  
  $sql = "
  INSERT INTO gongan
    (name, phone, location, lease_agreement, type, content, created )
    VALUES(
      '{$filtered['name']}',
      '{$filtered['phone']}',
      '{$filtered['location']}',
      '{$filtered['lease_agreement']}',
      '{$filtered['type']}',
      '{$filtered['content']}',
       NOW()
    )";
    
    $result = mysqli_query($conn, $sql);
    
		//if($result === false){
		//  echo '저장하는 과정에서 문제가 생겼습니다.';
		//  error_log(mysqli_error($conn));
		//} else {
		//  echo '성공했습니다. <a href="/">돌아가기</a>';
		//}
  
 ?>
 
 
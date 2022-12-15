<?php

	/* 서버 접속 */
  $servername = "43.201.87.32";
  $user = "mulzoo1";
  $password = "mulzoo@#34";
  $dbname = "web_1";
  $connect = mysqli_connect($servername, $user, $password, $dbname);
  
   $filtered = array(
    'name'=>mysqli_real_escape_string($connect, $_POST['name']),
    'email'=>mysqli_real_escape_string($connect, $_POST['email']),
    'phone'=>mysqli_real_escape_string($connect, $_POST['phone']),
    'description'=>mysqli_real_escape_string($connect, $_POST['description'])
  );
  
  $sql = "
  INSERT INTO contact
    (name, email, phone, description, created)
    VALUES(
      '{$filtered['name']}',
      '{$filtered['email']}',
      '{$filtered['phone']}',
      '{$filtered['description']}',
       NOW()
    )";
    
    $result = mysqli_query($connect, $sql);
		if($result === false){
		  echo '저장하는 과정에서 문제가 생겼습니다.';
		  error_log(mysqli_error($connect));
		} else {
		  echo '성공했습니다. <a href="/">돌아가기</a>';
		}
  
 ?>
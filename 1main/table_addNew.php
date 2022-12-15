<?php

	/* 서버 접속 */
  $servername = "43.201.87.32";
  $user = "mulzoo1";
  $password = "mulzoo@#34";
  $dbname = "web_1";
  $conn = mysqli_connect($servername, $user, $password, $dbname);
  
   $filtered = array(
    'name'=>mysqli_real_escape_string($conn, $_POST['name']),
    'position'=>mysqli_real_escape_string($conn, $_POST['position']),
    'office'=>mysqli_real_escape_string($conn, $_POST['office']),
    'extn'=>mysqli_real_escape_string($conn, $_POST['extn']),
    'salary'=>mysqli_real_escape_string($conn, $_POST['salary'])
  );
  
  $sql = "
  INSERT INTO employee
    (name, position, office, extn, salary, start_date)
    VALUES(
      '{$filtered['name']}',
      '{$filtered['position']}',
      '{$filtered['office']}',
      '{$filtered['extn']}',
      '{$filtered['salary']}',
       NOW()
    )";
    
    $result = mysqli_query($conn, $sql);
		

		if($result === false){
		  echo '저장하는 과정에서 문제가 생겼습니다.';
		  error_log(mysqli_error($conn));
		}
  
 ?>
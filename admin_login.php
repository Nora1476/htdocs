<?php

	session_start(); 
	
  //<!--php부분 form에 입력한 내용을 데이터베이스와 비교해서 로그인 여부를 알려준다.-->
  if(isset($_POST['admin'])&& isset($_POST['password'])){ //post방식으로 데이터가 보내졌는지?
       
    //mysql mulzoo계정으로하여 web_1 db로 접속.
  	$servername = "43.201.87.32";
	  $user = "mulzoo1";
	  $password = "mulzoo@#34";
	  $dbname = "web_1";
	  
	  $mysqli = new mysqli($servername, $user, $password, $dbname); //db 연결 

		//index_admin.html에서 입력받은 admin, password
	  $username=$_POST['admin'];
    $userpw=$_POST['password'];
	  
    $sql="SELECT * FROM gongan_login where admin='$username' and password='$userpw'";
    $result = $mysqli->query($sql);
    
    //넘어온 결과를 한 행씩 패치해서 $row 라는 배열에 담아낼 수 있습니다.
    $row = $result->fetch_array(MYSQLI_ASSOC);
    
    //결과가 존재하면 세션 생성
    if ($row != null) {
      $_SESSION['username'] = $row['admin'];
      print_r($_SESSION);
      echo "<script>location.replace('admin_main.php');</script>";
      exit;
    }
      
     //결과가 존재하지 않으면 로그인 실패
    if($row == null){
       echo "<script>alert('Invalid username or password')</script>";
       echo "<script>location.replace('index_admin.php');</script>";
       exit;
    }	
			 
	}
    
      
?>
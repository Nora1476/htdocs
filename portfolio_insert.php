<?php  

	
	/* 서버 접속 */
  $servername = "43.201.87.32";
  $user = "mulzoo1";
  $password = "mulzoo@#34";
  $dbname = "web_1";
  $connect = mysqli_connect($servername, $user, $password, $dbname);
  
   $filtered = array(
    'title'=>mysqli_real_escape_string($connect, $_POST['p_title']),
    'type'=>mysqli_real_escape_string($connect, $_POST['p_type']),
		'location'=>mysqli_real_escape_string($connect, $_POST['p_location']),
		'area'=>mysqli_real_escape_string($connect, $_POST['p_area']),
		'content'=>mysqli_real_escape_string($connect, $_POST['editordata']),    
  );

	 $sql = "
  INSERT INTO gongan_port
    (title, type, location, area, content, regdate)
    VALUES(
      '{$filtered['title']}',
      '{$filtered['type']}',
      '{$filtered['location']}',
      '{$filtered['area']}',
      '{$filtered['content']}',
       NOW()
    )";
    
   $result = mysqli_query($connect, $sql);
   
  
 if(is_array($_FILES))   
 {  
    foreach ($_FILES['files']['name'] as $name => $value) {
    	

      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];

      
      $file_name = explode(".", $_FILES['files']['name'][$name]);  // '.'을 기준으로 잘라 배열로 저장 ( 0번째 배열: 파일이름, 1번째 배열: 확장자 )  
      $allowed_ext = array("jpg", "jpeg", "png", "gif");		
      
      if(in_array($file_name[1], $allowed_ext)) {    // $file_name의 1번째 배열인 확장자명이 이미지 파일에 해당하는지 확인
          
        $new_name = basename($_FILES['files']['name'][$name]);
        $sourcePath = $_FILES['files']['tmp_name'][$name];  
        $targetPath = "img/".$new_name;  
        
        
        
        if(move_uploaded_file($sourcePath, $targetPath)) {    //move_uploaded_file($file_path, $destination) 임시경로에 있는 파일을 원하는 경로로 이동
	        exit;   
	      }                 
      }            
    }    
 }  
 ?>  
 
 
 

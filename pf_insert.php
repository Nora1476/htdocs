<?php  

	
  /* 서버 접속 */
  require_once("./dbconfig.php");	
  
   $filtered = array(
    'title'=>mysqli_real_escape_string($conn, $_POST['p_title']),
    'kind'=>mysqli_real_escape_string($conn, $_POST['p_kind']),
		'location'=>mysqli_real_escape_string($conn, $_POST['p_location']),
		'area'=>mysqli_real_escape_string($conn, $_POST['p_area']),
		'content'=>mysqli_real_escape_string($conn, $_POST['p_content']),   
		'open'=>mysqli_real_escape_string($conn, $_POST['p_open']), 
		'seq'=>mysqli_real_escape_string($conn, $_POST['p_open'])
  );
  
  echo   $_FILES['userfile']['name'];  

	 $sql = "
  INSERT INTO pf_list
    (title, kind, location, area, cont, open, reg_date)
    VALUES(
      '{$filtered['title']}',
      '{$filtered['kind']}',
      '{$filtered['location']}',
      '{$filtered['area']}',
      '{$filtered['content']}',
      '{$filtered['open']}',
       NOW()
    )";
    
   $result = mysqli_query($conn, $sql);
   
  
 if(is_array($_FILES))   
 {  
    foreach ($_FILES['files']['name'] as $name => $value) {
    	

      $file_size =$_FILES['files']['size'];
      $file_tmp =$_FILES['files']['tmp_name'];
      $file_type=$_FILES['files']['type'];

      
      $file_name = explode(".", $_FILES['files']['name'][$name]);  // '.'을 기준으로 잘라 배열로 저장 ( 0번째 배열: 파일이름, 1번째 배열: 확장자 )  
      $allowed_ext = array("jpg", "jpeg", "png", "gif");		
      
      if(in_array($file_name[1], $allowed_ext)) {    // $file_name의 1번째 배열인 확장자명이 이미지 파일에 해당하는지 확인
          
        $new_name =  md5(rand()) . '.' . $file_name[1];  
        $sourcePath = $_FILES['files']['tmp_name'][$name];  
        $targetPath = "img/".$new_name;  
        
              
        if(move_uploaded_file($sourcePath, $targetPath)) {    //move_uploaded_file($file_path, $destination) 임시경로에 있는 파일을 원하는 경로로 이동
	      	// 이미지파일 경로 db파일에 업로드
	      	$sql = "INSERT INTO pf_img (mno, seq, file) VALUES ((SELECT MAX(no) FROM pf_list), 1, '$targetPath' )";
	      	mysqli_query($conn, $sql);  
	      }                 
      }            
    } 
    
    foreach ($_FILES['files2']['name'] as $name => $value) {
    	

      $file_size =$_FILES['files2']['size'];
      $file_tmp =$_FILES['files2']['tmp_name'];
      $file_type=$_FILES['files2']['type'];

      
      $file_name = explode(".", $_FILES['files2']['name'][$name]);  // '.'을 기준으로 잘라 배열로 저장 ( 0번째 배열: 파일이름, 1번째 배열: 확장자 )  
      $allowed_ext = array("jpg", "jpeg", "png", "gif");		
      
      if(in_array($file_name[1], $allowed_ext)) {    // $file_name의 1번째 배열인 확장자명이 이미지 파일에 해당하는지 확인
          
        $new_name =  md5(rand()) . '.' . $file_name[1];  
        $sourcePath = $_FILES['files2']['tmp_name'][$name];  
        $targetPath = "img/".$new_name;  
        
              
        if(move_uploaded_file($sourcePath, $targetPath)) {    //move_uploaded_file($file_path, $destination) 임시경로에 있는 파일을 원하는 경로로 이동
	      	// 이미지파일 경로 db파일에 업로드
	      	$sql = "INSERT INTO pf_img (mno, seq, file) VALUES ((SELECT MAX(no) FROM pf_list), 2, '$targetPath' )";
	      	mysqli_query($conn, $sql);  
	      }                 
      }            
    }  
    
    foreach ($_FILES['files3']['name'] as $name => $value) {
    	

      $file_size =$_FILES['files3']['size'];
      $file_tmp =$_FILES['files3']['tmp_name'];
      $file_type=$_FILES['files3']['type'];

      
      $file_name = explode(".", $_FILES['files3']['name'][$name]);  // '.'을 기준으로 잘라 배열로 저장 ( 0번째 배열: 파일이름, 1번째 배열: 확장자 )  
      $allowed_ext = array("jpg", "jpeg", "png", "gif");		
      
      if(in_array($file_name[1], $allowed_ext)) {    // $file_name의 1번째 배열인 확장자명이 이미지 파일에 해당하는지 확인
          
        $new_name =  md5(rand()) . '.' . $file_name[1];  
        $sourcePath = $_FILES['files3']['tmp_name'][$name];  
        $targetPath = "img/".$new_name;  
        
              
        if(move_uploaded_file($sourcePath, $targetPath)) {    //move_uploaded_file($file_path, $destination) 임시경로에 있는 파일을 원하는 경로로 이동
	      	// 이미지파일 경로 db파일에 업로드
	      	$sql = "INSERT INTO pf_img (mno, seq, file) VALUES ((SELECT MAX(no) FROM pf_list), 3, '$targetPath' )";
	      	mysqli_query($conn, $sql);  
	      }                 
      }            
    }           
 }  
 ?>  
 
 
 

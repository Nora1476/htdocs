<?php
		
	 $output = '';  

		if(is_array($_FILES)){  
	    foreach ($_FILES['files']['name'] as $name => $value) {   // 배열 as  키(key)와 원소(value)를 인자로 가져옴
         $file_name = explode(".", $_FILES['files']['name'][$name]);  // '.'을 기준으로 나눔 이름을 배열의 0번째 요소, 확장자는 1번쨰 요소 
        
         $allowed_ext = array("jpg", "jpeg", "png", "gif");  
        
         if(in_array($file_name[1], $allowed_ext)) {  // file_name 1번쨰 요소로 담긴 확장자가 $allowed_ext 배열안에 존재하는지 확인
            $new_name = md5(rand()) . '.' . $file_name[1];  //고유값 생성코드 + 확장자
            
            $sourcePath = $_FILES['files']['tmp_name'][$name];  
            
            $targetPath = "upload/".$new_name;  
            
            if(move_uploaded_file($sourcePath, $targetPath)){  // $sourcePath 파일이 $targetPath 해당위치에 저장됨
                 $output .= '<img src="'.$targetPath.'" width="150px" height="180px" />';  
            }                 
         }            
	    }  
	    echo $output;  
		}  

?>
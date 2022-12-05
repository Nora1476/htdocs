<?php


/*
	echo "두 번째 파일 : ";

	echo "이름 - " . $_FILES['file2']['name']; 
	echo " , 타입 - " . $_FILES['file2']['type'];
	echo " , 크기 - " . $_FILES['file2']['size'];
	echo " , 임시이름 - " . $_FILES['file2']['tmp_name'];
	echo " , 에러 - " . $_FILES['file2']['error'];
*/	
	
	
	// 업로드한 파일을 저장할 디렉토리
	$save_dir = "./file";
	
	// 파일이 HTTP POST 방식을 통해 정상적으로 업로드되었는지 확인한다.
	if(is_uploaded_file($_FILES["file1"]["tmp_name"])) {
		echo "이름 - " . $_FILES['file1']['name'];   //input태그의 해당 name의 값을 가져옴
		echo " , 타입 - " . $_FILES['file1']['type'];
		echo " , 크기 - " . $_FILES['file1']['size'];
		echo " , 임시이름 - " . $_FILES['file1']['tmp_name']; //임시폴더에 랜덤한 이름으로 임시저장됨
		echo " , 에러 - " . $_FILES['file1']['error'];
		
		// 파일을 저장할 디렉토리 및 파일명 
		$dest = $save_dir . "/" . $_FILES["file1"]["name"];
		
		// 파일을 지정한 디렉토리에 저장
		if(!move_uploaded_file($_FILES["file1"]["tmp_name"], $dest)) { 
												//(from)첫번째 매개변수에 해당되는 파일이 있으면 (to)두번째 매개변수의 디렉토리파일안에 해당이름으로 저장하는 변수실행 실패시
		die("파일을 지정한 디렉토리에 저장하는데 실패했습니다.");
		}
	} else {
		echo "업로드된 파일이 없습니다.";
	}
		
?>
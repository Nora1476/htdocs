<?php
	
	session_start();
	$_SESSION["sess_id"] = $_POST["id"];
	//post방식으로 id 값을 가져와서 세션(array)에 저장 - sess_id(키) : id value(값) 
	
	echo "세션값: " . $_SESSION["sess_id"];
	//session array에 저장된 배열요소의 값을 key값으로 불러냄
	

?>
	
<?php

/*
	if(array_key_exists("myAlias",  $_COOKIE)){  
		$myAlias =  $_COOKIE["myAlias"]; 
		echo "쿠키값 :  $myAlias" ;
	}
*/


	echo "저장된 쿠키값: " . $_COOKIE["myAlias"] ;
	

?>

<div style="width:100%; text-align:center; margin-top:200px;">
	
여기는 게시판입니다. <br>
<button onclick="javascript:location.href='1205cookie_delete.php'">쿠키삭제</button>
<button onclick="javascript:location.href='1205cookie_write.php'">처음으로</button>
</div>
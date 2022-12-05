<form id="frm" name="frm" method="post" action="1205filesave.php" enctype="multipart/form-data">
	
 <input type="file" name="file1" value="">
 <br/>
 
 <!--
 <input type="file" name="file2" value="">
 <br/>
 -->
 
 <button onclick="javascript:document.frm.submit();">보내기</button>
</form>


<?php
	
	session_start();
	echo "세션값: " . $_SESSION["sess_id"];
	//session array에 저장된 배열요소의 값을 key값으로 불러냄
	

?>
	
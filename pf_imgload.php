 <?php
 
 /* 서버 접속 */
  require_once("./dbconfig.php");	
  
  settype( $_POST['mno'], "integer");
  
 
   $filtered = array(
		'mno'=>mysqli_real_escape_string($conn, $_POST['mno']),
		);
  
 
  
  $sql = "select * from pf_img where mno={$filtered['mno']}";
  $result = mysqli_query($conn,$sql);
  
  //echo '<script>';
	//echo 'console.log("'.$filtered['mno'].'")';
	//echo '</script>';
	
	//쿼리문 결과로 나온 배열의 row를 하나씩 가져옴 _ 끝까지 다 가져왔을 경우 false 반환 
   while($row = mysqli_fetch_array($result)){
    
     echo "<img src='./{$row[file]}' alt='img' style='height:120px; width:200px; margin:5px;'/>";
	    
   }
   
  
  
  ?>
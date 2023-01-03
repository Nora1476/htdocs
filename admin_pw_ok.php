<?php
	
	session_start();
	

  //<!--php부분 form에 입력한 내용을 데이터베이스와 비교해서 로그인 여부를 알려준다.-->
  if(isset($_POST['current_password'])&& isset($_POST['new_password'])){ //post방식으로 데이터가 보내졌는지?
  	//print_r($_SESSION);	
  	
		$session_username = $_SESSION[ 'username' ];
 		$current_password = $_POST[ 'current_password' ];
	  $new_password = $_POST[ 'new_password' ];
	  $new_password_confirm = $_POST[ 'new_password_confirm' ];
	  
	  
	  if ( !is_null( $current_password ) ) {
	  	//include_once("./dbconfig.php");		
 			$servername = "43.201.87.32";
		  $user = "mulzoo1";
		  $password = "mulzoo@#34";
		  $dbname = "web_1";
		  
		  $conn = mysqli_connect($servername, $user, $password, $dbname);
		  
	    $sql = "SELECT password FROM gongan_login WHERE admin = '" . $session_username . "';";
	    $result = mysqli_query( $conn, $sql );
	    while ( $row = mysqli_fetch_array( $result ) ) {
	      $encrypted_password = $row[ 'password' ];
	    }
	    
	    if ( $current_password == $encrypted_password ) {
	      if ( $new_password == $new_password_confirm ) {
	        //$encrypted_new_password = password_hash( $new_password, PASSWORD_DEFAULT);
	        $sql_change_password = "UPDATE gongan_login SET password = '" . $new_password . "' WHERE admin = '" . $session_username . "';";
	        mysqli_query( $conn, $sql_change_password );
	        echo '비밀번호가 변경되었습니다. 다시 로그인 해주세요!';
	        //header( 'Location: admin_main.php' );
	      } else {
	        echo '새로운 비밀번호가 일치하지않습니다.'
	      }
	    } else {
	      echo '현재 비밀번호가 틀렸습니다.';
	    }
	    
	    
	  }			 
	}
    
      
?>
<?php

	//time() + 86400 == 하루
	//setcookie(쿠키명칭, 쿠키 value값, 유효기간  )
	setcookie('myAlias', $_POST["alias"], time() + 864400 *30);
											

?>

<script>
	
	location.replace("1205cookie_board_list.php");
	
</script>
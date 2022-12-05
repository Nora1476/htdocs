<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

  <title>AJAX Database</title>
</head>
<body>
		
	<script>
		function add() {
			$.ajax({
				url: "./1124add_ajax_act.php",
				type: "post",
				data: $("form").serialize(), //입력된 혹은 선택된 값을 가리킴
				success:function(data){
					$("#result").html(data);
				}
			})
		}
	</script>
	<form>
		<input type="text" name="number1" style="width:100px;"> 더하기 
		<input type="text" name="number2" style="width:100px;">
		<input type="button" onclick="add()" value="결과"> <br>

		<span id="result"></span>
	</form>	
		
</body>
</html>
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
		
	 <div id="result"></div> <!-- ajax통신 결과값 삽입--> 
    <input type="text" id="msg" /> 
    <input type="button" value="get result" id="getResult" />
      
      
      <script>
          $('#getResult').click( function() {
              $('#result').html('');  //사용자가 버튼 클릭할때마다 결과 값을  역할
              $.ajax({
                  url:'./1124basic_ajax_act.php',
                  dataType:'json',
                  type:'POST',
                  data:{msg:$('#msg').val()}, // key:value 형색으로 데이터 전달 , 아이디가 msg인 엘리먼트의 값을 보냄
                  success:function(result){
                      if(result['result']==true){
                        $('#result').html(result['msg']); //아이디가 result인 엘리먼츠에 결과값 삽입
                      }
                  }
              });
          })
      </script>
		
</body>
</html>
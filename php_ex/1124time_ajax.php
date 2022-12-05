<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  
  <title>Document</title>
</head>
<body>
  
<p>time : <span id="time"></span></p>
<form>
    <select name="timezone">
        <option value="Asia/Seoul">asia/seoul</option>
        <option value="America/New_York">America/New_York</option>
    </select>
    <select name="format">
        <option value="Y-m-d H:i:s">Y-m-d H:i:s</option>
        <option value="Y-m-d">Y-m-d</option>
    </select>
</form>
<input type="button" id="execute" value="execute" />



<script>
    $('#execute').click(function(){
        $.ajax({
            url:'./1124time_ajax_act.php',
            type:'post',
            data:$('form').serialize(), //선택된 값을 데이터로 전달
            success:function(data){
                $('#time').text(data);
            }
        })
    })
</script>
  
</body>
</html>
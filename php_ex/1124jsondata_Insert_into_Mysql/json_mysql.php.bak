<?php

$connect = mysqli_connect("43.201.87.32", "mulzoo1", "mulzoo@#34", "web_1") or die(mysql_error());;

$filename = "employee_data.json";

$data = file_get_contents($filename);

$array = json_decode($data, true);



/*
//arry 확인
echo '<pre>';
print_r($array);
echo '</pre>';
*/

foreach($array as $value){
	
	$id = $value['id'];
	$name = $value['name'];
	$position = $value['position'];
	$salary = $value['salary'];
	$start_date = $value['start_date'];
	$office = $value['office'];
	$extn = $value['extn'];
	
	$sql = "insert into employee (id, name, position, salary, start_date, office, extn) 
					values ('$id', '$name', '$position','$salary','$start_date','$office', '$extn')";

	mysqli_query($connect, $sql);
	
	if($sql){
		echo "Data insert success";
	} else {
		echo "Failed!";
	}
	

}



?>

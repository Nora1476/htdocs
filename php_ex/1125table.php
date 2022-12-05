



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  
  <script>
  	
	$(document).ready(function () {
  	/*$('#example').DataTable({
      ajax: 'objects.txt',
      columns: [
        { data: 'name' },
        { data: 'position' },
        { data: 'office' },
        { data: 'extn' },
        { data: 'start_date' },
        { data: 'salary' },
      ],
  	}); */
	});
  	
  </script>
  
  <title>Document</title>
</head>
<body>
  <table id="example" class="display" style="width:100%">
  		<h4>db에서 데이터 불러오기</h4>
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>

				<tbody>
					<?php
						$con = mysqli_connect(
									 'localhost',
									 'root',
									 '000000',
									 'mulzoo');

						$sql = "select * from employee";
						$result = mysqli_query($con, $sql);	            
			     
            while ($row = mysqli_fetch_array($result)){
                echo "<tr>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["position"] . "</td>
                        <td>" . $row["office"] . "</td>
                        <td>" . $row["extn"] . "</td>
                        <td>" . $row["start_date"] . "</td>
                        <td>" . $row["salary"] . "</td>
                      </tr>";
            }
			     ?>
        </tbody>
				
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>  
</body>
</html>
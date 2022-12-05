



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--Begin jquery cdn-->
  <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <!--End jquery cdn-->
  

  
  
  <script>
  	
	$(document).ready(function () {
    $('#example').DataTable({
        processing: true,
        serverSide: true,
        ajax: './1125table_ajax_act.php',
	    });
	});
	  	
  </script>
  
  <title>Document</title>
</head>
<body>
 <table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>extn</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>extn</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </tfoot>
 </table>


<style>
	table{
		text-align:center;
	}
</style>
</body>

</html>
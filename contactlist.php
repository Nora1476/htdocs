<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <!--BEGIN: datatables-->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
	<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">	
	<!--END: datatables-->
</head>
<body>
    
  
  <table id="example" class="display" style="width:100%">
    <thead>
      <tr>
      	<th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Description</th>
        <th>Created</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
      	<th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Description</th>
        <th>Created</th>
      </tr>
    </tfoot>
  </table>
  
  
  <!-- Modal -->
	<div class="modal fade" id="contactModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h1 class="modal-title fs-5" id="staticBackdropLabel">Contact Infomation</h1>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	      	
	      	<input name="id" id="id" value="" hidden/>  <br>
	      	
	        <label> Name :: </label>
	        <input name="name" id="name" value="" />  <br>
	        
	        <label> Email :: </label>
	        <input name="email" id="email" value="" />  <br>
	        
	        <label> Phone :: </label>
	        <input name="phone" id="phone" value="" />  <br>
	        
	        <label> Created:: </label>
	        <input name="created" id="created" value="" readonly /> <br>
	        
	        <label> Description :: </label>
	        <textarea name="description" id="description" value="" /></textarea>  <br>
						        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancle</button>
	        <button type="button" id="btnModi" class="btn btn-secondary" data-bs-dismiss="modal">Modify</button>
	        <button type="button" id="btnDel" class="btn btn-primary">Delete</button>
	      </div>
	    </div>
	  </div>
	</div>
	
	<!-- Delete Check Modal -->
	<div class="modal fade" id="CheckDel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h1 class="modal-title fs-5" id="exampleModalLabel">Check Delete</h1>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        삭제하시겠습니까?!
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
	        <button type="button" id="btnCheckDel" class="btn btn-primary">Delete</button>
	      </div>
	    </div>
	  </div>
	</div>
	  
  
  
  
  <!--BEGIN: datatables-->
	<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<!--END: datatables-->
  <script>
  	$(document).ready(function () {
  	
  	//db데이터 불러오기
    var table =$('#example').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: 'contact_loadlist.php',
            type: 'POST',
        },
        columns: [
        		{ data: 'id' },
            { data: 'name' },
            { data: 'email' },
            { data: 'phone' },
            { data: 'description' },
            { data: 'created' },
        ],
        
        order: [[5, 'desc']],
      	
      	//엔터시 검색기능 실행
        search: {
	       return: true,
		    },
	  });
	    
	   // table 'tr' click event
	  $('#example tbody').on('click', 'tr', contactModal);
	    
		  function contactModal() {
		  	        
	  	  var data = table.row(this).data();
				$('#contactModal').modal('show'); 
				
				$('#id').val(data['id']);
				$('#name').val(data['name']);
				$('#email').val(data['email']);
				$('#phone').val(data['phone']);
				$('#description').val(data['description']);
				$('#created').val(data['created']);
		  };   
		  
		// modify Modal
		$("#btnModi").click(function(){

			var id  = $('#id').val();
			var name  = $('#name').val();
			var email  = $('#email').val();
			var phone  = $('#phone').val();
			var description  = $('#description').val();
			var created  = $('#created').val();
			
		
			$.ajax({
				url: "contact_modify.php",
				type: "POST",
				data:{
					id: id,
					name: name,
					email: email,
					phone: phone,
					description: description
				},
				success: function(data){
					alert('Data updated successfully !');
					$('#example').DataTable().ajax.reload();		
				}		
			})
		});
	  
	  // delete 버튼 클릭 이벤트
	  $("#btnDel").click(function(){
			$('#CheckDel').modal('show'); 
		}); 
		// delete 확인 모달
		$("#btnCheckDel").click(function(){
			var data = table.row(this).data();
			var id  = $('#id').val();
			console.log(id);
			 
			$.ajax({
				url: "contact_delete.php",
				type: "POST",
				data:{
					id: id,
				},
				success: function(data){
					alert('Data deleted successfully !');
					location.reload();					
				}		
			})
			
		});
		
		
		
		 
	    
	    
		});
  </script>
  
  <style>
		body{
			margin:20px;
		}
  	.btn_group{
  		text-align:right;
			margin: 20px;
  	}
  	label{
			width: 100px;
			margin: 5px;
		}
		input{
			width: 300px;
			text-indent: 10px;
		}
		textarea{
			margin-left:115px;
			width:300px;
			text-indent: 10px;
		}
  	
  	
  </style>
</body>
</html>
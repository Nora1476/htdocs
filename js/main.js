	function format(d) {
    return (
    		'<table id="td" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
	        '<tr>' +
		        '<td>Name</td>' +
		        '<td>' + d.name + '</td>' +
	        '</tr>' +
	        '<tr>' +
		        '<td>Salary</td>' +
		        '<td>' + d.salary +'</td>' +
	        '</tr>' +
	        '<tr>' +
		        '<td>Extension Number</td>' +
		        '<td>' + d.extn + '</td>' +
	        '</tr>' +
        '</table>' 
        );
	}
		
	
	$(document).ready(function() {  

			var dt = $('#example').DataTable({	
			  processing: true,
        serverSide: true,
        ajax: 'table_rowdetail.php',
        columns: [
            {
              class: 'details-control',
              orderable: false,
              data: 'null',
              defaultContent: '',
            },
            { 
            	class: 'id',
            	data: 'id' 
            },
            { data: 'name' },
            { data: 'position' },
            { data: 'office' },
            { data: 'extn' },
            { data: 'start_date' },
            { 
            	orderable: false,
              data: '',
              defaultContent: 
              	'<button type="button" id="btn_modiEm" class="btn btn-warning btn-xs">Modify</button><br>'
        			 +'<button type="button" id="btn_delEm"  class="btn btn-light btn-xs">Delete</button>', 
            },
        ],
        //hidden column id
        columnDefs: [ 
            {
              target: 1,
              visible: false,
            },
        ],
        order: [[6, 'desc']],
       
		  	search: {
		       return: true,
		    },
		    
	  	});
	  	
	  	// Array to track the ids of the details displayed rows
	    var detailRows = [];
	 
	    $('#example tbody').on('click', 'tr td.details-control', function () {
	        var tr = $(this).closest('tr');
	        var row = dt.row(tr);
	        var idx = detailRows.indexOf(tr.attr('id'));
	 
	        if (row.child.isShown()) {
	            tr.removeClass('details');
	            row.child.hide();
	 
	            // Remove from the 'open' array
	            detailRows.splice(idx, 1);
	        } else {
	            tr.addClass('details');
	            row.child(format(row.data())).show();
	 
	            // Add to the 'open' array
	            if (idx === -1) {
	                detailRows.push(tr.attr('id'));
	            }
	        }
	    });
	 
	    // On each draw, loop over the `detailRows` array and show any child rows
	    dt.on('draw', function () {
	        detailRows.forEach(function(id, i) {
	            $('#' + id + ' td.details-control').trigger('click');
	        });
	    });
			
			
			
		


		
		//Modify Employee
	 	$("#example tbody").on('click', 'tr td #btn_modiEm', function (e){
		 
		  e.preventDefault();
		  $("#check_modi").modal("show");  
		  
		  var currentRow = $(this).closest("tr"); 
		  var data = $('#example').DataTable().row(currentRow).data();
		  var str = data['id'];
	 		//id값 텍스트 자르기 
	 		var id = str.replace("row_", "");
 
		  $('.modal-body #id').val(id);
		  $('.modal-body #name').val(data['name']);
			$('.modal-body #position').val(data['position']);
			$('.modal-body #office').val(data['office']);
			$('.modal-body #extn').val(data['extn']);
			$('.modal-body #salary').val(data['salary']);	  
			
	  });	
	  
	  // Modify Check Ok
		$("#check_modi #btn_okmodi").click(function() {
			
				var id  = $('#check_modi .modal-body #id').val();
				var name = $('#check_modi #name').val();
				var position = $('#check_modi #position').val();
				var office = $('#check_modi #office').val();
				var extn = $('#check_modi #extn').val();
				var salary = $('#check_modi #salary').val();
				
				console.log(extn);

			$.ajax({
				url: "table_em_modi.php",
				type: "POST",
				data:{
					id:id,
					name: name,
					position: position,
					office: office,
					extn: extn,
					salary: salary
				},
				success: function(data){
					alert('Data updated successfully !');
					$('#example').DataTable().ajax.reload();		
				}		
			})
			
		  $("#check_modi").modal("hide");		
	  });
	  
	  // Modify Check Cancel
		$("#check_modi #btn_nomodi").click(function() {
		   $("#check_modi").modal("hide");
	  });
	  
	  
	
	  
	  
	  
	  
	  //Delete Employee 
	 	$("#example tbody").on('click', 'tr td #btn_delEm', function (e) {
	 		
	 		
	 		//hidden column 데이터 가져오기
	 		e.preventDefault(); 
	 		var currentRow = $(this).closest("tr"); 
	 		var data = $('#example').DataTable().row(currentRow).data();
	 		var str = data['id'];
	 		//id값 텍스트 자르기 
	 		var id = str.replace("row_", "");
	 		console.log(id);
	 		
	 		
			$.ajax({
				url: "table_em_delete.php",
				type: "POST",
				data:{
					id: id,
				},
				success: function(data){
					alert('Data deleted successfully !');
					//data table 특정 부분 리로드
				  $('#example').DataTable().ajax.reload();
				}		
			});
						
	  });
	 
		
 		
 		
 		
 		
 
	 	// Add Employee Modal
	 	$("#btn_employee").click(function() {
		   $("#add_Em").modal("show");  
	  });
	  
	  // close modal
		$("#add_Em #close_modal").click(function() {
		   $("#add_Em").modal("hide");
	  });
	  
	  //Add new employee
	  $("#add_Em #btn_newemployee").click(function() {
	  	
	  	var name  = $('#add_Em #name').val();
	  	var position  = $('#add_Em #position').val();
	  	var office  = $('#add_Em #office').val();
	  	var extn  = $('#add_Em #extn').val();
	  	var salary  = $('#add_Em #salary').val();
	  	
	    $.ajax({
			 	url: "table_addNew.php",
			 	type: "POST",
			 	data:{
			 		name: name,
			 		position: position,
			 		office: office,
			 		extn: extn,
			 		salary: salary
			 	},
			 	success: function(data){
			 		alert('Data updated successfully !');	
			 		$("#add_Em").modal("hide");
			 		//data table 특정 부분 리로드
			 		$('#example').DataTable().ajax.reload();
			 	}		
			})
	  });
	 
	 


	  
	  //contact form 유효성 검사 (-ing)
		$("#submitBtn").click(function(){
			alert("validation check");
		});
		
		
		//btnlist 클릭시 contact list 이동
		$('#btnlist').click(function(){
			 $(location).attr('href','contactlist.php');
		});

		
			
		
	    
	  
	});
	
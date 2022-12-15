
	$(document).ready(function() {  
	 
		var table = $('#example').DataTable({	
			processing: true,
      serverSide: true,
      ajax: 'index_loadtable.php',		
			
	  	search: {
	       return: true,
	    },
	  });
	  
	  
	  // table 'tr' click event
	  $('#example tbody').on('click', 'tr', myModal);
	  
	  // close modal
		$("#close_modal").click(function() {
		   $("#myModal").modal("hide");
	  });
	  
	  function alt() {
	      var data = table.row(this).data();
	      alert('You clicked on ' + data[0] + "'s row");
	  }
	  
	  function myModal() {
	  	 var data = table.row(this).data();
			$('#myModal').modal('show'); 
			$('#name').val(data[0]);
			$('#position').val(data[1]);
			$('#office').val(data[2]);
			$('#age').val(data[3]);
			$('#startdate').val(data[4]);
	  };  
	  
	  
	  //contact form 유효성 검사 (-ing)
		$("#submitBtn").click(function(){
			alert("validation check");
		});
		
		
		//contact list
		$('#btnlist').click(function(){
			 $(location).attr('href','index_contactlist.php');
		});

		
			
		
	    
	  
	});
	
$(document).ready(function(){
	
  $("#addForm").on('submit', function(e) {
  	e.preventDefault();
  	var formurl = $(this).attr('action');
  	var type = $(this).attr('method');
  	var formdata = new FormData($(this)[0]);
  	//console.log(data);

  	$.ajax({
  		url: formurl,
  		type: type,
  		data: formdata,
  		cache: false,
  		dataType:'JSON',
  		contentType: false,
        processData: false,
        beforeSend: function(){
        	$('.loading').css('display', 'block');
        },
  		success: function(data) {
  			if(data == 'success'){
  				swal({ title: "Success!", text: "Banner upload Success.", timer:5000, icon: "success",});
  			}
  			$('#addForm')[0].reset();
  		},
  		complete: function() {
	        $('.loading').css('display', 'none');
	    },
  	})
 

  });

});
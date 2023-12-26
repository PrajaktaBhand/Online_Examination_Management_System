 $(document).ready(function(){
 	
$("#username").val('');
$("#phoneno").val('');
$("#password").val();
$( "#Registration" ).submit(function( event ) {
    event.preventDefault(); // avoid to execute the actual submit of the form.
    var name=$("#username").val();
    var email=$("#useremail").val();
    var phone=$("#phoneno").val();
    var course=$("#course").val(); 
    var pass=$("#password").val();
    var cpass = $("#cpassword").val();
    if(pass != "" || pass != undefined){
    	if(cpass != "" || cpass != undefined){
    		if(pass.trim() == cpass.trim()){
    			$(".error").val();
			    var form = $(this);
			    $.ajax({
			           type: "POST",
			           url: 'http://localhost/personalproject/reg_connection.php',
			           data: form.serialize(), // serializes the form's elements.
			           success: function(data)
			           {
			           	console.log(data);
			               var result = jQuery.parseJSON(data);
			               if(result['flag'] == true){
			               		var res = confirm('Are you sure?');
			               		if(res == 1){
			               			window.location.href = 'http://localhost/personalproject/';
			               		}
			               		return 0;
			               }
			               return 0;
			                // show response from the php script.
			           }
			         });

		    	}
		    	else{
		    		//$(".error").html("password & confirm password not matach");

		    	}

		    }else{
		    		$(".error").html("confirm password is empty");
		    	}
    	}else{
		    		$(".error").html("password is empty");
		    	}

	});
 

      //function validation(){
        //var user = $('#username').val();
        //console.log(user);
        /*if (user == '') {
          documents.getElementById('usernames').innerHTML="invalid username";
        }*/
      //}
    });
   // });
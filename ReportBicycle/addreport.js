$(document).ready(function(){
	/*$('#txtItemCategory').val('');
	$('#txtItemName').val('');
	$('#txtItemDescription').val('');
	$('#txtPrice').val('0.0');*/

	//check login
	$.ajax({
			type: "POST",
			url: "../common/config.php"
		    }
	});
});

//logout
$("#linkLogout").click(function(event){
	//document.location.href = "../login/Login.html";
	//window.open("yahoo.com", '_blank');
	event.preventDefault();
	$.ajax({
			type: "POST",
			url: "../common/config.php"
		    },
			error: function(xhr,textStatus,err)
			{
				console.log("readyState: " + xhr.readyState);
				console.log("responseText: "+ xhr.responseText);
				console.log("status: " + xhr.status);
				console.log("text status: " + textStatus);
				console.log("error: " + err);
			}
	});

});

//Event handler for registration form submit
$('#report-form').submit(function(event){
	formData = $('#report-form').serialize();
    // cancels the form submission
    event.preventDefault();
	//alert(formData);

	$.ajax({
		type: "POST",
		url: "reportbicycle.php",
		data: formData+"&phpfunction=addItem",
	    success: function(echoedMsg){
			if(echoedMsg=='true')    {
				$("#divMessage").html("Item added succesfully");
			} else {
				$("#divMessage").html(echoedMsg);
			}
	    },
		error: function(msg){
			console.log(msg);
	    }
	});
});

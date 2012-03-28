	$('form#example').submit(function() {
	if (validateName() & validateEmail()){
	return true;
	}
	else {
	return false;
	}
 	});

		
		
	function validateName(){
	$('#err-name').empty();
    if($('#name').val() == ""){ 
    $('<span>')
    .append('This field is required.')
    .appendTo('#err-name');
    return false;
    }
    else{
    return true;
    }
    }
    
    
    
    function validateEmail(){
	$('#err-email').empty();
    if($('#email').val() == ""){ 
    $('<span>')
    .append('This field is required.')
    .appendTo('#err-email');
    return false;
    }
    else if (! $('#email').val().match("^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$")) {
    $('<span>')
    .append('Please enter a valid email address.')
    .appendTo('#err-email');
    return false;
    }
    else{
    return true;
    }
    }
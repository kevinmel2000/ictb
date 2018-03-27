$(document).ready(function() {
	
	//if submit button is clicked
	$('#email_corr').blur(function () {		
		
		var email = $('input[name=email_corr]');
		var regx = /^([a-z0-9_\-\.])+\@([a-z0-9_\-\.])+\.([a-z]{2,4})$/i;
		var returnError = false;
		/*
		if (email.val()=='') {
			email.addClass('error');
			alert("Correspondence's email is not valid.");
			returnError = true;
		} else email.removeClass('error');		
		*/
		if(!regx.test(email.val())){
          email.addClass('error');
		  alert("Correspondence's email is not valid.");
          returnError = true;
		} else email.removeClass('error');
		
		// Highlight all error fields, then quit.
		if(returnError == true){
			return false;	
		}
		
	});	
	
	
	$('#submit').click(function () {		
		
		var email = $('input[name=email_corr]');
		var regx = /^([a-z0-9_\-\.])+\@([a-z0-9_\-\.])+\.([a-z]{2,4})$/i;
		var returnError = false;
		/*
		if (email.val()=='') {
			email.addClass('error');
			alert("Correspondence's email is not valid.");
			returnError = true;
		} else email.removeClass('error');		
		*/
		if(!regx.test(email.val())){
          email.addClass('error');
		  alert("Correspondence's email is needed.");
          returnError = true;
		} else email.removeClass('error');
		
		// Highlight all error fields, then quit.
		if(returnError == true){
			return false;	
		}
		
	});	
});	
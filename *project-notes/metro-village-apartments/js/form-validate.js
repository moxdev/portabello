// JavaScript Document

var validator = new FormValidator('main-contact', [{
	name: 'form-fname',
	display: 'First Name',    
	rules: 'required'
	},  {
	name: 'form-lname',
	display: 'Last Name',    
	rules: 'required'
	},  {
	name: 'form-phone',
	display: 'Phone',    
	rules: 'required'
	},  {
	name: 'form-email',
	display: 'Email',    
	rules: 'required|valid_email'
	}], function(errors, evt) {
		if (errors.length > 0) {
			var SELECTOR_ERRORS = jQuery('#main-contact .error-box');
			//console.log( jQuery('label').each().attr('for') );
			
			if (errors.length > 0) {
				SELECTOR_ERRORS.empty();
				jQuery('label').css('color','#FFC425');
				jQuery('input').removeClass('error');
				
				for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
					SELECTOR_ERRORS.append(errors[i].message + '<br />');
					//console.log(errors[i].name);
					jQuery('input[name="' + errors[i].name + '"]').addClass('error');
					jQuery('label[for="' + errors[i].name + '"]').css('color','#F00');
			}
			SELECTOR_ERRORS.fadeIn(1000);
		} 
	}
});
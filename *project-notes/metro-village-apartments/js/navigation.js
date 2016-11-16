jQuery('.menu-toggle').click(function() {
	var listItem = jQuery('.main-navigation li');
	var i = 0;
	var j = listItem.length -1;
	
	slideIn = function () {
		if (i < listItem.length) {
			jQuery(listItem[i]).addClass('active');
	
			++i;
			setTimeout(slideIn, 125);
		}
	};
	
	slideOut = function () {
		if (j >=0) {
			jQuery(listItem[j]).removeClass('active');
	
			--j;
			setTimeout(slideOut, 125);
		}
	};
	
	/*console.log('i: ' + i);
	console.log('j: ' + j);*/
	
	if( jQuery(this).hasClass('active') ) {
		jQuery(this).removeClass('active');
		
		jQuery('#content').removeClass('active');
		jQuery('#content').addClass('inactive');
		
		jQuery('#colophon').removeClass('active');
		jQuery('#colophon').addClass('inactive');
		
		slideOut();
	} else {
		jQuery(this).addClass('active');
		
		jQuery('#content').removeClass('inactive');
		jQuery('#content').addClass('active');
		
		jQuery('#colophon').removeClass('inactive');
		jQuery('#colophon').addClass('active');
		
		slideIn();
	}
})
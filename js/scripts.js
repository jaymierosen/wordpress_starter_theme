$(function(){

	console.log("It's working");
	// HAMBURGER MENU
	 $('#toggle').click(function() {
		console.log('it works!?');
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
			$('#overlay').removeClass('open');
		} else {
			$(this).addClass('active');
			$('#overlay').addClass('open');
		}
		});

	 	//BOX SHADOW CONTACT FORM
	 	// $('.contact__form').click(function() {
	 	// 	console.log('it works!?');
	 	// 	if ($(this).hasClass('box--shadow')) {
	 	// 		// $(this).removeClass('box--shadow');
	 	// 		// $('#overlay').removeClass('open');
	 	// 	} else {
	 	// 		$(this).addClass('box--shadow');
	 	// 		// $('#overlay').addClass('open');
	 	// 	}
	 	// });
	 	$('.contact__form').click(function() {
	 		$(this).addClass('box--shadow');
	 		// if ($(this).hasClass('box--shadow')) {
	 		// 	// $(this).removeClass('box--shadow');
	 		// 	// $('#overlay').removeClass('open');
	 		// } else {
	 		// 	$(this).addClass('box--shadow');
	 		// 	// $('#overlay').addClass('open');
	 		// }
	 	});

	 	
}); //end of document ready

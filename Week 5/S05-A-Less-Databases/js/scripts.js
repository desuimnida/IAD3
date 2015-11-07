$(document).ready(function() {

	/*-----------
	dbSlides 
	-----------*/
	$('#dbSlides .slide:gt(0)').css({'opacity':'0'});

	function dbSlides_slide() {
		$('#dbSlides .slide:eq(1)')
			.delay(2000)
			.animate({'opacity':'1'}, 1000, dbSlides_done);
	}

	function dbSlides_done() {
		$('#dbSlides .slide:eq(0)')
			.css({'opacity':'0'})
			.appendTo('#dbSlides');
		dbSlides_slide(); //keep the party going
	}

	dbSlides_slide(); //start the party


}); //here ends the document ready
$(document).ready(function() {


	$('#contact').click(function() {

		$('#contact-form').slideDown(200);

	});


  $("#contact-form input").click(function() {

    $("#contact-form input.your-email").attr("value", "");

  });


});
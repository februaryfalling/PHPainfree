$(document).ready(function() {
	$('#debug h3').live('click', function() {
		var debug_id = $(this).toggleClass('closed').toggleClass('open').attr('id').replace(/debug_heading_/, '');
		$('div#debug_' + debug_id).toggleClass('closed').toggleClass('open');
	});
});

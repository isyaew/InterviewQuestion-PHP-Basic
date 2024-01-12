$(document).ready(function() {
	$('#usernameForm').on('submit', function(e) {
		e.preventDefault();
		
		var username = $('#username').val();
		
		if (username == '') {
			$('#message').text('Please enter a username.').css('color', 'red');
		} else {
			$.ajax({
				type: 'POST',
				url: 'info.php',
				data: { username: username },
				success: function(response) {
					if (response == 'Verified') {
						$('#message').text(response).css('color', 'green');
					} else {
						$('#message').text(response).css('color', 'red');
					}
				}
			});
		}
	});
});

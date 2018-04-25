<?php
	if (!isset($_SESSION['user'])) {
		echo "
		<script type=\"text/javascript\">
			$(document).ready(function(){
				$('title').text('Home');
                searchList();
				$(window).resize(resizeWindow);
				$('input#usr, input#pwd').on('keyup', function(e) {
					$('div.login-message').text('');
					if (e.keyCode == 13) {
						flogin();
					}
				});
				$('input.login').on('click', function(e) {
					flogin();
				});
			});
		</script>";
	}
	else {
		$user = $_SESSION['user'] === null ? $_SESSION['user']['name'] : $_SESSION['user']['alias'];
		echo "
		<script type=\"text/javascript\">
			$(document).ready(function(){
				$('title').text('".$user."');
                searchList();
				$(window).resize(resizeWindow);
				$('input#searchtb').on('keyup', function(e) {
					if (e.keyCode == 13) {
						searchList();
					}
				});
				$('input#searchbt').on('click', function(e) {
					searchList();
				});
				$('input#chatmessage').on('keyup', function(e) {
					if (e.keyCode == 13) {
						sendMessage($('#chatmessage').val());
					}
				});
				$('input#sendmessage').on('click', function(e) {
					sendMessage($('#chatmessage').val());
				});
			});
		</script>
		";	
	}
?>



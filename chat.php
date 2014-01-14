
<?php
require_once('header.php');
require_once('inc/HipChat.php');
?>
	
<?php 
$token = HC_TOKEN;
$hc = new HipChat\HipChat($token);
?>	

	<h1>Support Chat</h1>
	<p>Click the button below to be connected to the support room. Your issue will be addressed as soon as possible. You may be asked to verify your identity in-game.</p>
	<script src="assets/js/hipchat.js"></script>
	<script>
		$(function() {
			$('.hipChat').hipChatPanel({
				url: "https://www.hipchat.com/gsEnnuox3",
				timezone: "GMT"
				});
			});
	</script>
	
	<style>
	.show-hipchat {
		width: 90%;
		display: block;
		color: white;
		background: blue;
		padding: 10px;
		border: none;
		border-radius: 5px;
		vertical-align: middle;
		font-size: 150%;
		margin: 25% auto 0 auto;
	}
	
	.show-hipchat:hover {
		background: black;
	}
	
	.hipChat {
		height: 400px;
		border: 1px solid grey;
		background: rgb(30, 35, 41);
	}
	</style>

	<div class="hipChat"></div>

	</div>		

<?php require_once('footer.php')?>
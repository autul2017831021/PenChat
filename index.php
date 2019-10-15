<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,intial-scale=1,shrink-to-fit=no">
	<title>Home</title>
	<?php include 'components/css.php'; ?>
</head>
<body>
	<?php include 'components/nav.php';?>
	<div class="chat-container">
		<?php include 'components/sidebar.php'; ?>
		<section id="right-area">
			<?php include 'components/messages.php'; ?>
			<?php include 'components/chat_form.php'; ?>
			<?php include 'components/emoji.php'; ?>
		</section>
	</div>
	<?php include 'components/js.php'; ?>
</body>
</html>
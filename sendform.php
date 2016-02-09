<!doctype html>
<html>
<head>
</head>
<body>
	<?php

	$name = $_POST['name2'];
	$email = $_POST['email2'];
	$message = $_POST['meassage2'];
	
	$letter = "Запрос от " . $name . "\r\n Email " . $email . "\r\n Сообщение " . $message 

	mail($to, $subject, $message);
	?>
</body>
</html>
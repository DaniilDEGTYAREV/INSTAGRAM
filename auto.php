<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="auto.css">
</head>
<body>
	<form method="POST" action="proverka.php">
		<div class="div">
			<h2 class="h2">Instagram</h2>
			<input name="email" placeholder="Эл.почта" class="inp">
			<input name="pass" placeholder="Пароль" class="inp">
			<button class="btn">Войти</button>
			<?php
				 $_GET['eror']; 
				 echo $_GET['eror'];
			 ?>
		</div>
	</form>
</body>
</html>
<?php 
	$text = 'Ваши данные: ';
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'danya_pn_11');
	$query = mysqli_query($connect, "INSERT INTO instadanya (email, pass, name, surname, logo) VALUES ('" . $_POST['email'] ."', '" . $_POST['pass'] . "', '" . $_POST['name'] . "', '" . $_POST['surname'] . "', 'images1/" . $_FILES['img']['name'] . "')");
	
	mail($_POST['email'], 'Вы успешно зарегистрировались на нашем сайте', 'Ваш пароль и имайл ' . $_POST['email'] .  $_POST['pass'] );
	move_uploaded_file($_FILES['img']['tmp_name'], 'images1/' . $_FILES['img']['name']);
	header("Location: http://instadanya/auto.php");
?>
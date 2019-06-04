<?php $connect = mysqli_connect('127.0.0.1', 'root', '','danya_pn_11');
	$query = mysqli_query($connect, "SELECT * FROM instadanya WHERE email='" . $_POST['email'] . "' AND pass='" . $_POST['pass'] . "'");
	$result = $query->fetch_assoc();
	
	if($query->num_rows == 0 ){
		header("Location: http://instadanya/auto.php?eror='Нет такого пользователя'");
	} else{
		header("Location: http://instadanya/post.php?id=" . $result['id']);
	}
?>
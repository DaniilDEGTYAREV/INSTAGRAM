<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'danya_pn_11');
	if ($_FILES['img']['name'] != null){
		$query = mysqli_query($connect, "INSERT INTO instadanya_games (post_text, img) VALUES ('" . $_POST['post_text'] . "', 'images1/" . $_FILES['img']['name'] ."')");			
		move_uploaded_file($_FILES['img']['tmp_name'], 'images1/' . $_FILES['img']['name']);
		header("Location: http://instadanya/post.php?id=" . $_POST['id']);
	} else {
		$query = mysqli_query($connect, "INSERT INTO instadanya_games (name, post_text, img) VALUES ('" . $_POST['post_text'] . "', '" . $_POST['name'] . "')");
		$result = $query->fetch_assoc();
		header("Location: http://instadanya/post.php?id=" . $_POST['id']);
	};
	
?>
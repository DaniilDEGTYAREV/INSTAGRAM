<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'danya_pn_11');
	$query = mysqli_query($connect, "UPDATE instadanya SET logo='images1/" . $_FILES['logo']['name'] ."' WHERE id=" . $_POST['id']);
	
	
	header("Location: http://instadanya/post.php?id=" . $_POST['id']);
?> 
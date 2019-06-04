<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="col-6 mx-auto bg-light">
		<?php 
			$connect = mysqli_connect('127.0.0.1', 'root', '', 'danya_pn_11');
			$query = mysqli_query($connect, "SELECT * FROM instadanya WHERE id='" . $_GET['id'] . "'");
			$result = $query->fetch_assoc();
				?>
		<!-- Аватарка и логин -->
		<div class="row">
			<div class="col-1">
				<?php echo '<img src="' . $result['logo'] . '" class="w-100 rounded-circle">';?>
			</div>
			<div class="col-3">
				<?php echo 'Вы вошли ' . $result['name']; ?>
			</div>
		</div>

		<form method="POST" action="insertpost.php" enctype="multipart/form-data">
			<input placeholder="введите текст" name="post_text">
			<?php 
				echo '<input value="' . $result['id'] .'" name="id" style="display: none;">';

			?>
			<input type="file" name="img">
			<button type="submit">Добавить</button>
		</form>

		<form method="POST" action="insertlogo.php" enctype="multipart/form-data">	
			<p>добавить фото</p>
			<div style="display: flex;">	
				
				<input type="file" name="logo">
				<?php 
					echo '<input value="' . $result['id'] .'" name="id" style="display: none;">';

				?>
				<button type="submit">Добавить фото</button>
			</div>
		</form>

		<?php 
			$query = mysqli_query($connect, "SELECT * FROM instadanya_games ORDER BY id DESC ");
			$query1 = mysqli_query($connect, "SELECT * FROM instadanya WHERE id='" . $_GET['id'] . "'");
			for($i = 0; $i < $query->num_rows; $i++){
				$result = $query->fetch_assoc();
				$result1 = $query1->fetch_assoc();
			?>

			<div>
				<div class="row">
					<div class="col-1">	
						<? echo '<img src="' .  $result1['logo'] . '" class="w-100 rounded-circle">'; ?>
					</div>
					<div class="col-3">
						<? echo $result1['name'];?>
					</div>
				</div>
				<div class="col-5">
					<?php echo '<img src="' . $result['img'] . '" class="w-100">';?>
				</div>
				<div> 
					<?php echo $result['post_text']; ?>
				</div>	
			</div>
			<?php } ?>
	</div>
</body>
</html>
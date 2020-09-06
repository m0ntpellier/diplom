<?php
session_start();
if(!empty($_SESSION['admin'])){
    header('Location: premier.php');
    exit;
}
$login='administrator';
$pass='fdf471342e04063f1cade70b04434c99';
if(isset($_POST['enter'])){
	if (!empty($_POST['admin']) && !empty($_POST['password'])){
		if (($_POST['admin'] == $login) && (md5($_POST['password']) == $pass)){
			$_SESSION['admin'] = ['login' => $_POST['admin'], 'password' => $_POST['password']];
			header('Location: premier.php');
			die;
		} else{
			echo '<script>alert("Неправильный логин или пароль!");</script>';
		}
	}
}
?>
<!DOCTYPE html>
<html lang="ru" >

<head>
  <meta charset="UTF-8">
  <title>Вход</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="../templates/css/login.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="bg"></div>
<div class="login-wrap">
	<div class="login-html">
		<div class="login-form">
			<div class="sign-in-htm">
		<p class="enter">Вход в панель управления</p>
			<form method="post">
				<div class="group">
					<input id="user" type="text" class="input" name="admin" placeholder="Логин" autocomplete="off">
				</div>
				<div class="group">
					<input id="pass" type="password" class="input" name="password" placeholder="Пароль" data-type="password">
				</div>
				<div class="icon">
					<p><i class="fas fa-film"></i></p>
				</div>
				<div class="group text-center ent">
					<input type="submit" name="enter" class="button" value="Войти">
				</div>
				<div class="hr"></div>
				<div class="text-center text-danger mt-3 wrong">
					<p>Неверный логин или пароль!</p>
				</div>
			</form>	
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>
</html>
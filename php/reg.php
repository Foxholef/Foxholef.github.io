<?php

$email=$_POST['email'];
$pass=$_POST['pass'];
$name=$_POST['name'];


if(mb_strlen($email) < 5 || mb_strlen($email) > 20) {
		echo "Недопустимая длина логина";
		exit();
	}
	else if(mb_strlen($pass) < 6 || mb_strlen($pass) > 50) {
		echo "Недопустимая длина пароля";
		exit();
	}

	$mysql=mysqli_connect('localhost','root','','сайт мебели');
		if ($mysql==False) {
			echo "Соединение не установленно";
			echo mysqli_connect_error();
			exit();
		}
	$mysql->query("INSERT INTO `registration` (`email`,`pass`,`name`)
		VALUES ('$email','$pass','$name')");

	$mysql->close();

	header('location: ../reg.html')

?>
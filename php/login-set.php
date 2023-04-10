<?php 
	if (isset($data['do_login'])) {
		$errors = array();
		$user = R::findOne('user', 'login = ?', array($data['login']));
		if ($user) {
			if (password_verify($data['password_1'], $user->password)) {
				$_SESSION['logged_user'] = $user;
				setcookie("status", "online", time()+3600, "/");
				setcookie("id", $data['login'], time()+3600, "/");

				header('Location: main.php');
				exit();
			} else {
				$errors[] = 'Пароль введен неверно!';
			}
		} else {
			$errors[] = 'Пользователь с таким логином не найден!';
		}
	}
?>
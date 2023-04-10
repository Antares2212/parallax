<?php 
	if (isset($data['do_singup'])) {
		$errors = array();

		if (trim($data['login']) == '') {
			$errors[] = 'Введите логин!';
		}

		if (trim($data['email']) == '') {
			$errors[] = 'Введите email!';
		}

		if ($data['password_1'] == '') {
			$errors[] = 'Введите пароль!';
		}

		if ($data['password_2'] != $data['password_1']) {
			$errors[] = 'Повторный пароль был введен не верно';
		}

		if (R::count('user', "login = ?", array($data['login'])) > 0) {
			$errors[] = 'Пользователь с таким логином уже существует';
		}

		if (R::count('user', "email = ?", array($data['email'])) > 0) {
			$errors[] = 'Пользователь с такой почтой уже существует';
		}

		if (empty($errors)) {
			$user = R::dispense('user');
			$user->login = $data['login'];
			$user->email = $data['email'];
			$user->password = password_hash($data['password_1'], PASSWORD_DEFAULT);
			R::store($user);

			header('Location: main.php?page=login');
		}
	}
?>
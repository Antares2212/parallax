<main>
	<section class="registr">
		<div class="registr__title title">
			<span>L</span>ogin
		</div>
		<form action="" method="POST">
			<?php 
				if (!empty($errors)) {
					echo array_shift($errors);
				}
			?>
			<label for="name">
				Login: 
				<input type="text" name="login" value="<?php echo @$data['login']; ?>" placeholder="Type your name...">
			</label>
			<label for="password_1">
				Password:
				<input type="password" name="password_1" value="<?php echo @$data['password_1']; ?>" placeholder="Type your password...">
			</label>
			<input class="registr__btn btn" type="submit" name="do_login" value="Login">
		</form>
	</section>
</main>
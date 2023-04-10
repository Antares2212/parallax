<main>
	<section class="registr">
		<div class="registr__title title">
			<span>R</span>egistration
		</div>
		<form action="#" method="POST">
			<?php 
				if (!empty($errors)) {
					echo '<p style="color: red; text-align: center;">'.array_shift($errors).'</p>';
				}
			?>
			<label for="name">
				Name: 
				<input type="text" name="login" value="<?php echo @$data['login']; ?>" placeholder="Type your login...">
			</label>
			<label for="email">
				Email:			 
				<input type="email" name="email" value="<?php echo @$data['email']; ?>" placeholder="Type your email...">
			</label>
			<label for="password_1">
				Password:
				<input type="password" name="password_1" value="<?php echo @$data['password_1']; ?>" placeholder="Type your password...">
			</label>
			<label for="password_2">
				Password:
				<input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>" placeholder="Type your password again...">
			</label>
			<input class="registr__btn btn" type="submit" name="do_singup" value="Registr">
		</form>
	</section>
</main>
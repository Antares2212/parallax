<div class="header">
	<nav class="menu" id="menu">
		<div class="menu__logo">
			<a href="main.php?page=main">
				<span>L</span>ogotype
			</a>
		</div>
		<ul class="menu__list">
			<li class="menu__item">
				<a href="#about" class="menu__link">
					Aboout Us
				</a>
			</li>
			<li class="menu__item">
				<a href="main.php?page=blog" class="menu__link">
					Blog
				</a>
			</li>
			<li class="menu__item">
				<a href="#works" class="menu__link">
					Our Works
				</a>
			</li>
			<li class="menu__item">
				<a href="#contact" class="menu__link">
					Contact
				</a>
			</li>
		</ul>
		<ul class="menu__log">
			<?php 
				if (empty($_COOKIE['id'])) {
					echo '<li class="menu__login">
							<a href="main.php?page=login" class="menu__link">
								<i class="far fa-user"></i> Sign in 
							</a>
						</li>
						<li class="menu__registration">
							<a href="main.php?page=registr" class="menu__link">
								<i class="fas fa-sign-in-alt"></i> Sign up
							</a>
						</li>';
				} else {
					echo '<li class="menu__client">
							<a href="main.php?page=client" class="menu__link">'
								.$_COOKIE["id"].
							'</a>
						 </li>
						 <li class="menu__client">
							 <form action="" method="post"">
							 	<a href="../php/logout.php" name="logout" class="menu__link">
									<i class="fas fa-sign-out-alt"></i>
								</a>
							 </form>
						 </li>';
				}
			?>
		</ul>
	</nav>
</div>
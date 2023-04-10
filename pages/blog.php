<?php 
	$func = R::getAssoc('SELECT * FROM blog'); 

	if (isset($data['delete'])) {
		echo $item['thema'];
		$find = R::load('blog', $data['number']);
		R::trash($find);

	}
?>
<main>
	<section class="blog">
		<div class="row">
			<div class="blog__title title">
				<span>B</span>log
			</div>
			<div class="col-lg-11 blog__main ml-auto mr-auto">
				<?php
					foreach($func as $item): 
				?>
				
				<div class="blog__user d-flex justify-content-between">
					<div class="col-lg-9">
						<div class="user__thema"><span class="close"></span>
							<?=$item['thema']?>
						</div>
						<div class="user__text">
							<?=$item['text']?>
						</div>
					</div>
					<div class="user__border"></div>
					<div class="col-md-2 user__info">
						<div class="user__img">
							<img src="../img/noavatar.png" alt="">
						</div>
						<div class="user__name">
							<?=$item['name']?>
						</div>
						<div class="user__time">
							<?=$item['time']?>
						</div>
					</div>
					<?php 
						if (!empty($_COOKIE['id'])) {
					?>
						<form action="" method="post">
							<input type="submit" name="delete" value="">
						</form>
					<?php
						}
					?>
				</div>
				
				<?php 
					endforeach;
				?>
			</div>
		</div>
		<div class="row">
			<form class="col-lg-8 ml-auto mr-auto" action="" method="post">
				<label for="blog_text">
					<p>
						Ваш текст:
						<span id="count_letter"></span>
					</p>
					<input class="blog__thema" type="text" name="thema" value="" placeholder="Type thema...">
					<textarea id="count_char_textarea" class="txta" placeholder="Your text..." name="text" onchange="countChar()" onkeyup="countChar()" maxlength="500">
					</textarea>
				</label>
				<input class="blog__btn btn" type="submit" name="blog_submit" value="Submit">
			</form>
		</div>
	</section>
</main>
<?php require_once '../php/server.php'; ?>
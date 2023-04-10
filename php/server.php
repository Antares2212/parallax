<?php
	if (isset($data['blog_submit'])) {
		if (empty($errors)) {
			$blog = R::dispense('blog');
			$blog->name = $_COOKIE["id"];
			$blog->thema = $data['thema'];
			$blog->text = $data['text'];
			$blog->status = $data['status'];
			$blog->time = date('y,m,d');
			R::store($blog);

		} else {
			echo array_shift($errors);
		}
	}
?>
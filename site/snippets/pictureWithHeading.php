<?php if($image = $page->image()): ?>
		<img src="<?= $image->url() ?>" alt="">
<?php endif ?>
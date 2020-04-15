<div class="container">
	<?php if($image = $page->image()): ?>
			<img src="<?= $image->url() ?>" alt="">
	<?php endif ?>
  <div class="centered"><h1><?= $page->imageTextHeading() ?></h1></div>
</div>
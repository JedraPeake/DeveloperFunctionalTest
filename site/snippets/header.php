<head>
	<?= css(['assets/css/index.css', '@auto']) ?>

	<?php if($image = $page->image()): ?>
		<img src="<?= $image->url() ?>" alt="">
	<?php endif ?>

	<?php $items = $pages->listed(); if($items->isNotEmpty()): ?>
		<nav>
			<ul>
				<?php foreach($items as $item): ?>
					<li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
				<?php endforeach ?>
			</ul>
		</nav>
	<?php endif ?>
</head>
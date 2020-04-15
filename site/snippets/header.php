<head>
	<?= css(['assets/css/index.css', '@auto']) ?>

	<div class="flex-container">
		<div class="logo">
			<?php if($image = $page->image()): echo $image->crop(100); ?>
			<?php endif ?>
		</div>
		<div class="pages">
			<?php $items = $pages->listed(); if($items->isNotEmpty()): ?>
				<nav>
					<ul>
						<?php foreach($items as $item): ?>
							<li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
						<?php endforeach ?>
					</ul>
				</nav>
			<?php endif ?>
		</div>
	</div>
</head>
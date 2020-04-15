<head>
	<?= css(['assets/css/index.css', '@auto']) ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta name="<?= $page->Metatitle()->kt() ?>" content="<?= $page->Metadescription()->kt()  ?>">
	<?php if($page->Onindex()->toBool()): ?>
		<meta name="robots" content="noindex">
	<?php endif ?>
	
	<div class="flex-container">
		<div class="logo">
			<?php if($image = $site->Logoimage()->toFile()): ?>
				<img width="167px" height="100px" src="<?= $image->url() ?>" alt="">
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
			<?php if ($user = $kirby->user()): ?>
				<li>
					<a href="<?= url('logout') ?>">Logout</a>
				</li>
  			<?php endif ?>
		</div>
	</div>
</head>
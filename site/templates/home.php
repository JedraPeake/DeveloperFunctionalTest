<?php if (!$kirby->user()) go('/login') ?>

<html>
	<?php snippet('header') ?>

	<body>
		<main>

			<?php snippet('pictureWithHeading') ?>

			<div class="content">
				<?= $page->bodyText()->kt() ?>
			</div>
		</main>

		<?php snippet('footer') ?>

	</body>
</html>
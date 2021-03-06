<html>
	<?php snippet('header') ?>

	<body>
		<main>

			<?php snippet('pictureWithHeading') ?>

			<?php if($success): ?>
				<div class="alert success">
					<p><?= $success ?></p>
				</div>
			<?php else: ?>
				<?php if (isset($alert['error'])): ?>
					<div><?= $alert['error'] ?></div>
				<?php endif ?>

				<form method="post" action="<?= $page->url() ?>">
					<div class="field">
						<label for="name">
							Name <abbr title="required">*</abbr>
						</label>
						<input type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
						<?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>
					</div>
					<div class="field">
						<label for="email">
							Email <abbr title="required">*</abbr>
						</label>
						<input type="email" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
						<?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>
					</div>
					<div class="field">
						<label for="text">
							Text <abbr title="required">*</abbr>
						</label>
						<textarea id="text" name="text" required>
							<?= $data['text']?? '' ?>
						</textarea>
						<?= isset($alert['text']) ? '<span class="alert error">' . html($alert['text']) . '</span>' : '' ?>
					</div>
					<div class="buttons">
						<input type="reset" name="reset" value="Reset">
						<input type="submit" name="submit" value="Submit">
					</div>
				</form>
			<?php endif ?>
		</main>

		<?php snippet('footer') ?>

	</body>
</html>
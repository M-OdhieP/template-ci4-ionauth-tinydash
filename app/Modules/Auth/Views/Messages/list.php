<?php if (!empty($messages)) : ?>
	<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<?php foreach ($messages as $message) : ?>
			<?= esc($message) ?>
		<?php endforeach ?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif ?>
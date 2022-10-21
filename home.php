<?php get_header(); ?>

<article id="home">
	<aside class="hero-image">

		<?php echo wp_get_attachment_image(45, 'full', false, ['class' => 'hero-emblem']); ?>

		<div id="topVisual">
			<div class="wrap1">
				<?php echo wp_get_attachment_image(0, 'full', false, ['class' => 'image']); ?>
			</div>
			<div class="wrap1">
				<?php echo wp_get_attachment_image(0, 'full', false, ['class' => 'image']); ?>
			</div>
			<div class="wrap1">
				<?php echo wp_get_attachment_image(0, 'full', false, ['class' => 'image']); ?>
			</div>
		</div>
		<div id="topVisualSp">
			<div class="wrap1">
				<?php echo wp_get_attachment_image(245, 'full', false, ['class' => 'image']); ?>
			</div>
			<div class="wrap1">
				<?php echo wp_get_attachment_image(70, 'full', false, ['class' => 'image']); ?>
			</div>
			<div class="wrap1">
				<?php echo wp_get_attachment_image(71, 'full', false, ['class' => 'image']); ?>
			</div>
		</div>
	</aside>

	<main>

	</main>
</article>
<?php get_footer(); ?>
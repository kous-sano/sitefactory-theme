<?php get_header(); ?>

<article id="home">

<!---------------------------------------------- slider -------------------------------------->
	<aside class="hero-image">
		<div id="topVisual">
			<div class="wrap1">
				<?php echo wp_get_attachment_image(17, 'full', false, ['class' => 'image']); ?>
			</div>
			<div class="wrap1">
				<?php echo wp_get_attachment_image(19, 'full', false, ['class' => 'image']); ?>
			</div>
			<div class="wrap1">
				<?php echo wp_get_attachment_image(18, 'full', false, ['class' => 'image']); ?>
			</div>
		</div><!-- /#topVisual -->
	</aside><!-- /.hero-image -->

<!-------------------------------------------- imgonly -------------------------------------->
	<aside class="hero-image">
		<?php echo wp_get_attachment_image(60, 'full', false, ['class' => 'image']); ?>
	</aside><!-- /.hero-image -->

<!-------------------------------------------- main ------------------------------------------->

	<section id="main">

	</section><!-- /#main -->
</article><!-- /#home -->

<?php get_footer(); ?>

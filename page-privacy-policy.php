<?php get_header(); ?>
<article id="<?php echo $post->post_name; ?>">
	<main>
		<div class="container lazy">

			<?php echo $post->post_content; ?>

		</div>
	</main>
</article>
<?php get_footer(); ?>
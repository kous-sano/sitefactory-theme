<?php get_header(); ?>
<article id="<?php echo $post->post_name; ?>">
	<section id="main">

		<div class="wrap-anchorlink">
			<?php echo get_template_part( "menu", "company" ); ?>
		</div><!-- /.wrap-anchorlink -->

		<section class="section-1">
			<div class="container lazy">
				<h2>会社概要</h2>
				<?php the_post();the_content(); ?>
			</div><!-- /.container -->
		</section><!-- /.section-1 -->
	
	</section><!-- /#main -->
</article><!-- /#<?php echo $post->post_name; ?> -->
<?php get_footer(); ?>

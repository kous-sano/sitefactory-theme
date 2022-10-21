<?php get_header(); ?>
<article id="news" class="news-single">
	<main>
		<div class="container lazy">
			<?php
			if (have_posts()) : while (have_posts()) : the_post(); ?>

					<section class="single-post">
						<time><?php the_time("Y.m.d"); ?></time>
						<h2><?php the_title(); ?></h2>
						<div class="content-area">
							<?php the_content(); ?>
						</div>
						<div class="thumbnail-area">
							<?php echo get_the_post_thumbnail($post_id, 'medium_large', array('class' => 'image')); ?>
						</div>
					</section>

			<?php endwhile;
			endif; ?>

			<a href="<?php echo esc_url(home_url('news')); ?>" class="link-button">お知らせ一覧へ</a>
		</div>
	</main>
</article>
<script type="text/javascript">
	jQuery(function($) {
		$('#main table').wrap('<div class="flickWrap"></div>');
	});
</script>
<?php get_footer(); ?>
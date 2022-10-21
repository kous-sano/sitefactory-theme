<?php get_header(); ?>

<article id="news">
	<main>
		<div class="container lazy">
			<?php
			if (have_posts()) : ?>

				<ul class="news-list">
					<?php while (have_posts()) : the_post();?>
						<li>
							<time class="news__date"><?php the_time("Y.m.d"); ?></time>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
					<?php endwhile; ?>
				</ul>

			<?php else : echo '<p class="lazy">投稿はまだありません</p>';
			endif; ?>

			<div class="pagenavi text-center lazy">
				<?php if (function_exists('wp_pagenavi')) {
					wp_pagenavi();
				} ?>
			</div><!-- /.pagenavi -->

		</div><!-- /.container -->
	</main>
</article><!-- /#news -->
<script type="text/javascript">
	jQuery(function($) {
		$('#main table').wrap('<div class="flickWrap"></div>');
	});
</script>
<?php get_footer(); ?>
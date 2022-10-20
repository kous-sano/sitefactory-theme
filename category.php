<?php get_header(); ?>

<article id="news">
	<section id="main">
		<div class="container">
			<?php
			if(have_posts()): while(have_posts()): the_post();

			$src = get_the_post_thumbnail( $post_id, 'medium_large', array( 'class' => 'image'));

			if($src){
				$class = "news__txt";
			}else{
				$class = "news__txt--only";
			}
			?>
			
			<section class="section01">
				<div class="columns">
					<?php
						if($src){
							echo "<div class=\"news__img lazy\">{$src}</div>";
						}
					?>
					<div class="<?php echo $class ?> lazy">
						<time class="news__date"><?php the_time("Y.m.d"); ?></time>
						<h2 class="news__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="inner01">
							<?php the_content(); ?>
						</div><!-- /.inner01 -->
					</div><!-- /.<?php echo $class ?> -->
				</div><!-- /.columns -->
			</section><!-- /.section01 -->

			<?php endwhile;else:echo '<p class="lazy">投稿はまだありません</p>';endif; ?>

			<div class="pagenavi text-center lazy">
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
			</div><!-- /.pagenavi -->

		</div><!-- /.container -->
	</section><!-- /#main -->
</article><!-- /#news -->
<script type="text/javascript">
jQuery(function($){
	$( '#main table' ).wrap( '<div class="flickWrap"></div>' );
});
</script>
<?php get_footer(); ?>

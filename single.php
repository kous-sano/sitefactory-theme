<?php get_header(); ?>
<article id="news" class="news-single">
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
						<h2 class="news__title"><?php the_title(); ?></h2>
						<div class="inner01">
							<?php the_content(); ?>
						</div><!-- /.inner01 -->
					</div><!-- /.<?php echo $class ?> -->
				</div><!-- /.columns -->
			</section><!-- /.section01 -->

			<?php endwhile;endif; ?>

			<div class="wp-pagenavi var01 lazy">
				<div class="wp-pagenavi__prev">
					<?php next_post_link('%link','<< %title'); ?>
				</div><!-- /.wp-pagenavi__prev -->
				<div class="wp-pagenavi__next">
					<?php previous_post_link('%link','%title >>'); ?>
				</div><!-- /.wp-pagenavi__next -->
			</div><!-- /.wp-pagenavi -->

		</div><!-- /.container -->
	</section><!-- /#main -->
</article><!-- /#news.news-single -->
<script type="text/javascript">
jQuery(function($){
	$( '#main table' ).wrap( '<div class="flickWrap"></div>' );
});
</script>
<?php get_footer(); ?>

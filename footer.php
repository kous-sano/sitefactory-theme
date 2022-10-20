<footer>
	<div id="footer">
		<div class="container">

			<div class="footer-nav">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'footernavi',
					'container'      => 'nav',
					'depth'          => 0,
				) );
				?>
			</div><!-- /.footer-nav -->

		</div><!-- /.container -->
	</div><!-- /#footer -->
	<div id="copyright" class="text-center">&copy; </div><!-- /#copyright -->
</footer>
<a href="#header" class="rtt"><img src="<?php echo get_template_directory_uri(); ?>/images/common/pagetop.svg" alt="ページトップへ"></a><!-- /.rtt -->
<?php wp_footer(); ?>
</body>
</html>

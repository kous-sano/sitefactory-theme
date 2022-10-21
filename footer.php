<footer>
	<div id="footer-contact">
		<div class="content-parent">
			<div class="tel-area">
				<h2>お問い合わせ<span>CONTACT</span></h2>
				<p>
					ご相談・ご質問等ございましたら、<br>
					お気軽にお問い合わせ下さい
				</p>
				<p class="tel-and-time">
					<a href="tel:072-991-8846">072-991-8846</a><br>
					受付時間 8:30～17:30（日祝除く）
				</p>
			</div>
			<div class="mail-area">
				<a href="<?php echo esc_url(home_url('contact')); ?>">
					<span></span>
					メールでの<br>
					お問い合わせ
				</a>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="footer-nav">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'footernavi',
				'container'      => 'nav',
				'depth'          => 0,
			));
			?>
		</div>

		<div id="company-data">
			<div class="addresses">
				<a href="<?php echo esc_url(home_url('')); ?>" class="logo-area">
					<?php echo wp_get_attachment_image(5, 'full', false, ['class' => 'image--inline']); ?>
				</a>

				<p class="address">
					〒581-0042 大阪府八尾市南木の本5-1<br>
					TEL.<a href="tel:072-991-8846">072-991-8846</a>　FAX.072-991-8848
				</p>
			</div>

			<div id="copyright" class="text-center">
				<p>&copy; KENSHU TECHNOS CO., LTD. All Rights Reserved.</p>
			</div>
		</div>
	</div>

</footer>
<a href="#" class="rtt"><img src="<?php echo get_template_directory_uri(); ?>/images/common/pagetop.svg" alt="ページトップへ"></a><!-- /.rtt -->
<?php wp_footer(); ?>
</body>

</html>
<?php get_header(); ?>
<article id="<?php echo $post->post_name; ?>">
	<section id="main">
		<div class="container">

			<div class="catch01">
				<h4>お電話・FAXの場合は下記までご連絡ください。</h4>
				<span><a href="tel:0000-00-0000">TEL.0000-00-0000</a></span><span>FAX.0000-00-0000</span><br>
				<small>受付時間 / 平日00:00〜00:00</small>
			</div><!-- /.catch01 -->
			<h2>お問い合わせ</h2>
			<p class="text01">
				ご連絡先とお問い合わせ内容をご確認の上で、「入力内容を確認する」ボタンをクリックしてください。<br>
				なお、お問い合わせの内容によっては、ご連絡までにお時間をいただく場合がございます。ご了承ください。
			</p><!-- /.text01 -->
			<div class="wrap-form lazy">
				<?php the_post(); the_content(); ?>
			</div><!-- /.wrap-form -->

		</div><!-- /.container -->
	</section><!-- /#main -->
</article><!-- /#<?php echo $post->post_name; ?> -->
<?php get_footer(); ?>

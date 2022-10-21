<?php get_header(); ?>
<article id="<?php echo $post->post_name; ?>">
	<main>
		<div class="container lazy">

			<div class="tel-and-fax">
				<h3>お電話・FAXの場合は<br class="sp-only">下記までご連絡ください。</h3>
				<ul>
					<li>TEL.<a href="tel:072-991-8846">072-991-8846</a></li>
					<li>FAX.072-991-8848</li>
				</ul>
				<p>受付時間 8:30～17:30（日祝除く）</p>
			</div>

			<h2>メールでのお問い合わせ</h2>
			<p class="top-explanation_contact">
				ご連絡先とお問い合わせ内容をご記入のうえで、「入力内容を確認する」ボタンをクリックしてください。<br>
				なお、お問い合わせの内容によっては、ご連絡までにお時間をいただく場合がございます。ご了承ください。
			</p>

			<div class="form-area input-mode">
				<?php the_post();
				the_content(); ?>
			</div>

		</div><!-- /.container -->
	</main><!-- /#main -->
</article><!-- /#<?php echo $post->post_name; ?> -->
<?php get_footer(); ?>
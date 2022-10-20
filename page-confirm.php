<?php get_header(); ?>

<article id="contact" class="confirm">
	<section id="main">
		<div class="container">
			<h2>お問い合わせ（内容の確認）</h2>
			<p class="text01">
				内容をご確認の上で、「送信する」ボタンをクリックしてください。<br />
				内容を修正する場合は、「修正する」ボタンをクリックしてください。
			</p><!-- /.text01 -->
			<div class="wrap-form">
			<?php the_post(); the_content(); ?>
			</div><!-- /.wrap-form -->
		</div><!-- /.container -->
	</section><!-- /#main -->
</article><!-- /#contact.confirm -->
<?php get_footer(); ?>

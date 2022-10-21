<?php get_header(); ?>
<article id="contact" class="confirm">
	<main>
		<div class="container lazy">

			<p class="top-explanation">
				内容をご確認の上で、「送信する」ボタンをクリックしてください。<br />
				内容を修正する場合は、「修正する」ボタンをクリックしてください。
			</p>
			
			<div class="form-area check-mode">
				<?php the_post(); the_content(); ?>
			</div>

		</div>
	</main><!-- /#main -->
</article><!-- /#contact.confirm -->
<?php get_footer(); ?>

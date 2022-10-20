<?php get_header(); ?>

<article id="not-found">
	<section id="main">
        <div class="container text-center">
            <h2 class="title-404">404<small>Not Found</small></h2>
            <strong class="catch">お探しのページが見つかりません。</strong>
            <p>ページが「移動」もしくは「削除」されたか「一時的にアクセスできない」可能性があります。<br>
            恐れ入りますが、再度トップページからアクセスをお願いいたします。</p>
            <div class="wrap-btn">
                <a href="<?php echo esc_url(home_url('')); ?>" class="button-404">
                   トップページへ戻る
                </a>
            </div><!-- /.wrap-btn -->
        </div><!-- /.container -->
	</section><!-- /#main -->
</article><!-- /#<?php echo $post->post_name; ?> -->

<?php get_footer(); ?>

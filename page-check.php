<?php get_header(); ?>
<article id="contact" class="entry confirm check">
    <section id="main">
        <div class="container">

            <section class="section01">
                <h2>採用エントリー（内容の確認）</h2>
                <p class="text01">
                    内容をご確認の上で「送信する」ボタンをクリックしてください。<br>
                    内容を修正する場合は「修正する」ボタンをクリックしてください。
                </p><!-- /.text01 -->
                <div class="wrap-form">
                    <?php the_post(); the_content(); ?>
                </div><!-- /.wrap-form -->
            </section><!-- /.section01 -->
        
        </div><!-- /.container -->
    </section><!-- /#main -->
</article><!-- /#contact.entry.confirm.check -->
<?php get_footer(); ?>

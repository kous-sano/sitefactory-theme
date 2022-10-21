<?php get_header(); ?>
<article id="contact" class="entry confirm check">
    <main>
        <div class="container" class="lazy">

            <h2>採用エントリー（内容の確認）</h2>

            <p class="top-explanation">
                内容をご確認の上で「送信する」ボタンをクリックしてください。<br>
                内容を修正する場合は「修正する」ボタンをクリックしてください。
            </p>

            <div class="form-area check-mode">
                <?php the_post();
                the_content(); ?>
            </div>

        </div><!-- /.container -->
    </main><!-- /#main -->
</article><!-- /#contact.entry.confirm.check -->
<?php get_footer(); ?>
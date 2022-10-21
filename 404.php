<?php get_header(); ?>

<article id="not-found">
    <main>
        <section>
            <div class="container">
                <h2>404<br class="sp-only"> Not Found</h2>

                <p class="strong">お探しのページが<br class="sp-only">見つかりません。</p>

                <p>
                    お客様がお探しのページは削除されたか、URLが変更された可能性があります。<br>
                    お手数ですが、下記メニューから目的のページをお探しください。
                </p>

                <?php wp_nav_menu([
                    'menu' => 'not-found-nav',
                    'container'      => 'nav',
                    'depth'          => 0,
                ]); ?>

                <a href="<?php echo esc_url(home_url('')); ?>" class="link-button">トップページへ戻る</a>

            </div>
        </section>
    </main>
</article><!-- /#<?php echo $post->post_name; ?> -->

<?php get_footer(); ?>
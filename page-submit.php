<?php get_header(); ?>
<article id="contact">
    <section id="main">
        <div class="container">

            <?php the_post(); the_content(); ?>
            
            <div class="btnWrap01 text-center">
                <a href="<?php echo esc_url(home_url('')); ?>" class="btn03">トップページヘ戻る</a>
            </div><!-- /.btnWrap01 -->

        </div><!-- /.container -->
    </section><!-- /#main -->
</article><!-- /#contact -->
<?php get_footer(); ?>

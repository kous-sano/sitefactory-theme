<?php get_header(); ?>
<article id="contact" class="submit-end">
    <main>
        <div class="container lazy">

            <?php the_post(); the_content(); ?>
            
            <a href="<?php echo esc_url(home_url('')); ?>" class="link-button">トップページへ戻る</a>

        </div><!-- /.container -->
    </main><!-- /#main -->
</article><!-- /#contact -->
<?php get_footer(); ?>

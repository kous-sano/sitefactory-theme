<?php get_header(); ?>
<article id="<?php echo $post->post_name; ?>">
    <section id="main">
        
        <div class="wrap-anchorlink">
            <?php echo get_template_part( "menu", "recruit" ); ?>
        </div><!-- /.wrap-anchorlink -->
        
        <div class="container lazy">

            <h2>募集要項</h2>

            <?php
            //Contents
            $args = array(
                "post_type" => "recruitpost",
                "posts_per_page" => -1
            );
            $the_query = new WP_Query($args);
            if($the_query->have_posts()):
            while($the_query->have_posts()):
            $the_query->the_post();
            ?>

            <section class="post-requirements">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
                <div class="area-btn text-center">
                    <a href="<?php echo esc_url(home_url("entry/")); ?>" class="button">採用エントリーはこちら</a>
                </div><!-- /.area-btn -->
            </section><!-- /.post-requirements -->

            <?php
            endwhile;
            else:
            echo '<p class="text-center">現在募集をおこなっておりません</p>';
            endif;
            wp_reset_postdata();
            ?>

        </div><!-- /.container -->
    </section><!-- /#main -->
</article><!-- /#<?php echo $post->post_name; ?> -->
<?php get_footer(); ?>

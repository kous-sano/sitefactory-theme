<?php get_header(); ?>
<article id="<?php echo $post->post_name; ?>">
    <main>

        <?php echo get_template_part("menu", "recruit"); ?>

        <section>
            <div class="container lazy">

                <h2>募集要項</h2>

                <?php
                //Contents
                $args = array(
                    "post_type" => "recruitpost",
                    "posts_per_page" => -1
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                ?>

                        <section class="post-requirements">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <?php $fields = get_fields($post); ?>


                            <dl>
                                <?php foreach ($fields['募集要項　詳細'] as $value) : ?>
                                    <dt><?php echo $value['項目']; ?></dt>
                                    <dd><?php echo $value['説明']; ?></dd>
                                <?php endforeach; ?>
                            </dl>

                            <a href="<?php echo esc_url(home_url("entry/")); ?>" class="link-button">採用エントリーはこちら</a>

                        </section>

                <?php
                    endwhile;
                else :
                    echo '<h3>●●スタッフ</h3>';
                    echo '<p>現在募集をおこなっておりません</p>';
                endif;
                wp_reset_postdata();
                ?>

            </div>
        </section>
    </main>
</article>
<?php get_footer(); ?>
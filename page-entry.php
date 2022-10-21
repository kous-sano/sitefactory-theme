<?php get_header(); ?>
<article id="contact" class="entry">
    <main>
        <div class="container lazy">

            <section class="section-1 lazy">
                <?php
                //募集要項があれば表示
                $the_query = new WP_Query(array("post_type" => "recruitpost"));
                if ($the_query->have_posts()) :
                ?>
                    <p class="top-explanation">
                        必要な情報をご記入のうえで、「入力内容を確認する」ボタンをクリックしてください。<br>
                        必須の項目は必ずご記入をお願いします。
                    </p>

                    <div class="form-area input-mode">
                        <?php the_post();
                        the_content(); ?>
                    </div>

                <?php else : ?>
                    <p>現在募集をおこなっておりません</p>
                <?php endif;
                wp_reset_postdata(); ?>
            </section><!-- /.section-1 -->

        </div><!-- /.container -->
    </main><!-- /#main -->
</article><!-- /#contact.entry -->
<?php get_footer(); ?>
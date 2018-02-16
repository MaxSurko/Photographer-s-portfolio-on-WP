    <?php get_header(); ?>

    <?php
    //Вывод записей
    $args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1
    );
    $portfolio = new WP_Query( $args );
    ?>

    <?php if( $portfolio->have_posts() ) : while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>

		<a class="<?php
            $tags = wp_get_post_tags($post->ID);
            if ($tags) {
                foreach($tags as $tag) {
                    echo deleteSpace($tag->name)." ";
                }
            }
            ?>"
           href="<?php
           $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
           echo $large_image_url[0];
           ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/dummy.png"
           data-original="<?php
            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), '' );
            echo $large_image_url[0];
            ?>"
           alt="<?php the_title(); ?>">
        </a>

    <?php endwhile; else: ?>

        <h3>Записей нет</h3>

    <?php endif; ?>

    <?php get_footer(); ?>

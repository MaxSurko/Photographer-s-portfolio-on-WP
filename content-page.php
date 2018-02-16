<div class="content_header">
    <?php echo get_the_post_thumbnail($post->ID); ?>
    <h1><?php echo get_bloginfo('name'); ?></h1>
    <p><?php echo get_bloginfo('description'); ?></p>
</div>

<div class="content_body">
    <?php the_content(); ?>
</div>
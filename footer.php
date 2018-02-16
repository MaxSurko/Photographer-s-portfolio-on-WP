</div>

<div class="filter_items">

    <?php if ( is_front_page() && is_home() ) : ?>

    <div class="filter_items">

        <button class="filter_label active">All</button>

       <?php
       $tags = get_tags();
       if ($tags) {
           foreach ($tags as $tag) {
                echo "<button class=\"filter_label \" data-filter=\"." . deleteSpace($tag->name). "\">$tag->name</button>
       ";
           }
       }
    ?>
    </div>
    <?php endif ?>

</div>

<div class="hidden"></div>

<div class="loader">
    <div class="loader_inner"></div>
</div>

<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/respond/respond.min.js"></script>
<![endif]-->


<?php wp_footer(); ?>

</body>
</html>
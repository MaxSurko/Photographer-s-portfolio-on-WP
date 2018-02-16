<!DOCTYPE html>

<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/respond/respond.min.js"></script>
<![endif]-->


<head>

    <meta charset="utf-8">

    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/apple-touch-icon-114x114.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php wp_head();?>

</head>

<body<?php if ( !is_front_page() && !is_home() ) : ?> class="inside"<?php endif; ?> >

<aside class="left_side">

    <div class="btn_mnu" title="Menu">
        <div class="btn_row"></div>
        <div class="btn_row"></div>
        <div class="btn_row"></div>
    </div>

    <div class="aside_content">

        <div class="user_info">

            <?php
            $idObj = get_ID_by_slug('about' );
            echo get_the_post_thumbnail($idObj); ?>

            <h2><?php bloginfo('name'); ?></h2>
            <p><?php bloginfo('description'); ?></p>
        </div>

        <nav>

            <?php wp_nav_menu( 'menu=left_mnu' ); ?>

        </nav>

    </div>

</aside>

<div class="content<?php if ( is_front_page() && is_home() ) : ?> gallery<?php endif; ?> ">

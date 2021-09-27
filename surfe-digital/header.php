<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta <?php bloginfo('charset');?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?php bloginfo('name'); ?> </title>

    <?php wp_head(); ?>

    <!-- StyleSheets -->
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/normalize.css' ?> ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/header.css' ?> ">
    <link rel="stylesheet" media="screen and (max-width: 991px)" href=" <?= get_template_directory_uri() . '/css/header-sm.css' ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/footer.css' ?> ">
    <link rel="stylesheet" media="screen and (max-width: 450px)" href=" <?= get_template_directory_uri() . '/css/footer-sm.css' ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/fp-post1.css' ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/fp-post2.css' ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/fp-post3.css' ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/fp-post4.css' ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/fp-post5.css' ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/fp-post6.css' ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/ip-post1.css' ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/ip-post2.css' ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/ip-post3.css' ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/ip-post4.css' ?> ">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>

        <div class="container-fluid header-container">
            <div class="row">

                <div class="col-lg-3 col-md-12 col-sm-12 col-12 header-logo-container">
                    <?php the_custom_logo(); ?>

                    <a class="toggle-nav" href="#">&#9776;</a>

                </div>

                <div class="col-lg-9 col-md-12 col-sm-12 col-12 nav-container">

                    <nav>
                        <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'navigation-menu',
                                'container'       => '',
                                'menu_class' => 'nav justify-content-end navigation-menu',
                                'menu_id' => 'navigation-menu'
                            )
                        );
                        ?>
                    </nav>
                </div>

            </div>
        </div>

    </header>
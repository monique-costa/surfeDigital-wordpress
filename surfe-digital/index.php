<?php
require_once 'header.php';

$args1 = array(
    'post_type' => 'innerpage-post-1',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$query1 = new WP_Query($args1);

$args2 = array(
    'post_type' => 'innerpage-post-2',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$query2 = new WP_Query($args2);

$args3 = array(
    'post_type' => 'innerpage-post-3',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$query3 = new WP_Query($args3);

$args5 = array(
    'post_type' => 'frontpage-post-6',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$query5 = new WP_Query($args5);
?>

<div class="ip-post1-generic-container container-fluid">
    <div class="row">
            <?php
            if($query1->have_posts()){
                while($query1->have_posts()){
                    $query1->the_post();

                    the_post_thumbnail();

                    ?>
                    <div class="col-12 ip-post1-text-container">
                        <?php the_title('<h2 class="ip-post1-title">', '</h2>'); ?>
                    </div>                    

                <?php }
            }?>
    </div>
</div>

<div class="ip-post2-generic-container container">
    <div class="row">

        <?php if($query2->have_posts()){
            while($query2->have_posts()){
                $query2->the_post();
                ?>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12 ip-post2-image-container container">

                    <?php the_post_thumbnail(); ?>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12 ip-post2-text-container">

                    <?php the_title('<h2 class="ip-post2-title">', '</h2>'); ?>
                    
                    <h3 class="ip-post2-subtitle">
                        <?php echo get_post_meta($post->ID, '_ip_post2_subtitle', true); ?>
                    </h3>

                    <?php the_content(); ?>

                    <ul class="ip-post2-list container">
                        <li class="ip-post2-item">
                            <img class="ip-post2-list-img" src="<?= get_template_directory_uri() . '/img/gray-clock.png' ?>">
                            <p> <?php echo get_post_meta($post->ID, '_ip_post2_item1', true); ?> </p>
                        </li>

                        <li class="ip-post2-item">
                        <img class="ip-post2-list-img" src="<?= get_template_directory_uri() . '/img/gray-clock.png' ?>">
                            <p> <?php echo get_post_meta($post->ID, '_ip_post2_item2', true); ?> </p>
                        </li>

                        <li class="ip-post2-item">
                            <img class="ip-post2-list-img" src="<?= get_template_directory_uri() . '/img/gray-clock.png' ?>">
                            <p> <?php echo get_post_meta($post->ID, '_ip_post2_item3', true); ?> </p>
                        </li>
                    </ul>

                    <button class="ip-post2-button">
                        <?php echo get_post_meta($post->ID, '_ip_post2_button', true); ?>
                    </button>

                </div>

            <?php }
        } ?>
        
    </div>
</div>

<div class="ip-post3-generic-container container">
    <div class="row">

        <?php
        if ($query3->have_posts()){
            while($query3->have_posts()){
                $query3->the_post();

                ?>
                <div class="ip-post3-text-container">

                    <?php the_title('<h2 class="ip-post3-title">', '<h2>'); ?>

                    <h3 class="ip-post3-subtitle">
                        <?php echo get_post_meta($post->ID, '_ip_post3_subtitle', true); ?>
                    </h3>

                    <p> <?php the_content(); ?> </p>

                </div>

                <div class="ip-post3-squares-container container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 ip-post3-square">
                            <img class="ip-post3-image" src="<?= get_template_directory_uri() . '/img/gray-clock.png' ?>">
                            <h4 class="ip-post3-square-title">
                                <?php echo get_post_meta($post->ID, '_ip_post3_squareTitle1', true); ?>
                            </h4>
                            <p> <?php echo get_post_meta($post->ID, '_ip_post3_squareContent1', true); ?> </p>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 ip-post3-square">
                            <img class="ip-post3-image" src="<?= get_template_directory_uri() . '/img/gray-clock.png' ?>">
                            <h4 class="ip-post3-square-title">
                                <?php echo get_post_meta($post->ID, '_ip_post3_squareTitle2', true); ?>
                            </h4>
                            <p> <?php echo get_post_meta($post->ID, '_ip_post3_squareContent2', true); ?> </p>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 ip-post3-square">
                            <img class="ip-post3-image" src="<?= get_template_directory_uri() . '/img/gray-clock.png' ?>">
                            <h4 class="ip-post3-square-title">
                                <?php echo get_post_meta($post->ID, '_ip_post3_squareTitle3', true); ?>
                            </h4>
                            <p> <?php echo get_post_meta($post->ID, '_ip_post3_squareContent3', true); ?> </p>
                        </div>
                    </div>
                </div>

                <button class="ip-post3-button">
                    <?php echo get_post_meta($post->ID, '_ip_post3_button', true); ?>
                </button>

            <?php }
        }    
    ?> </div>
</div>

<div class="ip-post4-generic-container container-fluid">
    <div class="row">
        <div class="col-12 post4-text-container">
            <h2 class="ip-post4-title">
                Ultrices vitae sit
            </h2>
            <h3 class="ip-post4-subtitle">
                Eget massa aenean quam nulla dui
            </h3>
        </div>

        <div id="ip-post4-carousel" class="col-12 carousel-dark carousel slide" data-ride="carousel">
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= get_template_directory_uri() . '/img/carousel1.png' ?>" class="ip-post4-image d-block">
                    <h4 class="ip-post4-carousel-title">
                        Ante at tincidunt
                    </h4>
                    <p>Mi arcu euismod euismod</p>
                </div>

                <div class="carousel-item">
                    <img src="<?= get_template_directory_uri() . '/img/carousel2.png' ?>" class="ip-post4-image d-block">
                    <h4 class="ip-post4-carousel-title">
                        Arcu vitae eu
                    </h4>
                    <p>Vivamus et quam</p>
                </div>

                <div class="carousel-item">
                    <img src="<?= get_template_directory_uri() . '/img/carousel3.png' ?>" class="ip-post4-image d-block">
                    <h4 class="ip-post4-carousel-title">
                        Tellus et tortor
                    </h4>
                    <p>Leo elit in</p>
                </div>
            </div>

            <a class="carousel-control-prev post4-carousel-button" href="#ip-post4-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Anterior</span>
            </a>

            <a class="carousel-control-next post4-carousel-button" href="#ip-post4-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Próximo</span>
            </a>

        </div>

        <div class="container col-12">
            <button class="ip-post4-button"> The quick brown </button>
        </div>

    </div>
</div>

<div class="post6-generic-container container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 post6-text-container">
            
            <?php
            if($query5->have_posts()){
                while($query5->have_posts()){
                    $query5->the_post();

                    the_title('<h2 class="post6-title">', '</h2>');
                    the_content();
                }
            }

        ?>            
        </div>
        <form class="col-lg-6 col-md-6 col-sm-12 col-12 post6-form">
            <label for="post6-form-name" class="post6-label">Nome</label>
            <input type="text" class="post6-input" name="post6-form-name" placeholder="Paloma Alonso">

            <label for="post6-form-email" class="post6-label">E-mail</label>
            <input type="text" class="post6-input" name="post6-form-email" placeholder="Digite seu e-mail">
        
            <input type="submit" class="post6-submit" value="The quick brown">
        
        </form>
    </div>
</div>

<?php
require_once 'footer.php';
?>
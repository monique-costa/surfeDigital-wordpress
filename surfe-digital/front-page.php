<?php
require_once 'header.php';


$args1 = array(
    'post_type' => 'frontpage-post-1',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$query1 = new WP_Query($args1);

$args2 = array(
    'post_type' => 'frontpage-post-2',
    'post_status' => 'publish',
    'posts_per_page' => 4
);
$query2 = new WP_Query($args2);

$args3 = array(
    'post_type' => 'frontpage-post-3',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$query3 = new WP_Query($args3);

$args5 = array(
    'post_type' => 'frontpage-post-5',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$query5 = new WP_Query($args5);

$args6 = array(
    'post_type' => 'frontpage-post-6',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$query6 = new WP_Query($args6);
?>

<div class="post1-generic-container container">
    <div class="row">
        <?php
        if ($query1->have_posts()) {
            while ($query1->have_posts()) {
                $query1->the_post();
                ?>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12 post1-text-container">

                    <?php

                    the_title('<h2 class="post1-title">', '</h2>');
                    ?>
                    <h3 class="post1-subtitle1"> 
                        <?php echo get_post_meta($post->ID, '_post1-subtitle1', true); ?>
                    </h3>
                    <h3 class="post1-subtitle2">
                        <?php echo get_post_meta($post->ID, '_post1-subtitle2', true); ?>
                    </h3>

                    <?php the_content(); ?>

                    <button class="post1-button1"> 
                        <?php echo get_post_meta($post->ID, '_post1-button1', true); ?>
                    </button>
                    <button class="post1-button2">
                        <?php echo get_post_meta($post->ID, '_post1-button2', true); ?> <img class="post1-arrow" src="<?= get_template_directory_uri() . '/img/arrow.png' ?>">
                    </button>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12 post1-image-container">

                    <?php
                    the_post_thumbnail();
                    ?>

                </div>

        <?php
            }
        } ?>
    </div>
</div>

<div class="post2-generic-container container-fluid">
    <div class="row">

    <?php
        if ($query2->have_posts()){
            while($query2->have_posts()){
                $query2->the_post();
                
                ?>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 container post2-individual-container">
                
                    <?php
                    the_post_thumbnail();
                    the_title('<h2 class="post2-title">', '</h2>');
                    the_content();
                    ?>

                </div>
            <?php }
        } ?>    
        </div>
    </div>
</div>

<div class="post3-generic-container container">
    <div class="row">

    <?php
    if($query3->have_posts()){
        while($query3->have_posts()){
            $query3->the_post();

            ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 post3-text-container">

                    <?php

                    the_title('<h2 class="post3-title">', '</h2>');
                    ?>
                    <h3 class="post3-subtitle"> 
                        <?php echo get_post_meta($post->ID, '_post3-subtitle1', true); ?>
                    </h3>
                    <h3 class="post3-subtitle">
                        <?php echo get_post_meta($post->ID, '_post3-subtitle2', true); ?>
                    </h3>

                    <?php the_content(); ?>

                    <ul class="post3-list">
                        <li class="post3-item"> 
                            <?php echo get_post_meta($post->ID, '_post3-item1', true); ?>
                        </li>
                        <li class="post3-item"> 
                            <?php echo get_post_meta($post->ID, '_post3-item2', true); ?>
                        </li>
                        <li class="post3-item"> 
                            <?php echo get_post_meta($post->ID, '_post3-item3', true); ?>
                        </li>
                        <li class="post3-item"> 
                            <?php echo get_post_meta($post->ID, '_post3-item4', true); ?>
                        </li>
                    </ul>


                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12 post1-image-container">

                    <?php
                    the_post_thumbnail();
                    ?>

                </div>
        <?php }
    }
    ?>

    </div>
</div>

<div class="post4-generic-container container">
    <div class="row">
        <div class="col-12 post4-text-container">
            <h2 class="post4-title">
                In mauris ultrices velit adipiscing
            </h2>
            <p>Suspendisse elit donec augue vitae blandit justo n eque velit ornare elit risus id.</p>
        </div>

        <div id="post4-carousel" class="col-12 carousel-dark carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#post4-carousel" data-slide-to="0" class="active">
                </li>
                <li data-target="#post4-carousel" data-slide-to="1" class="">
                </li>
                <li data-target="#post4-carousel" data-slide-to="2" class="">
                </li>
                <li data-target="#post4-carousel" data-slide-to="3" class="">
                </li>
                <li data-target="#post4-carousel" data-slide-to="4" class="">
                </li>
            </ol>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= get_template_directory_uri() . '/img/carrosel-logo1.png' ?>" class="post4-image d-block">
                </div>
                <div class="carousel-item">
                    <img src="<?= get_template_directory_uri() . '/img/carrosel-logo2.png' ?>" class="post4-image d-block">
                </div>
                <div class="carousel-item">
                    <img src="<?= get_template_directory_uri() . '/img/carrosel-logo3.png' ?>" class="post4-image d-block">
                </div>
                <div class="carousel-item">
                    <img src="<?= get_template_directory_uri() . '/img/carrosel-logo4.png' ?>" class="post4-image d-block">
                </div>
                <div class="carousel-item">
                    <img src="<?= get_template_directory_uri() . '/img/carrosel-logo5.png' ?>" class="post4-image d-block">
                </div>
            </div>

            <a class="carousel-control-prev post4-carousel-button" href="#post4-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Anterior</span>
            </a>

            <a class="carousel-control-next post4-carousel-button" href="#post4-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Próximo</span>
            </a>

        </div>
    </div>
</div>

<div class="post5-generic-container container-fluid">
    <div class="col-12 post5-content container">
        <div class="row">

        <?php
        if($query5->have_posts()){
            while($query5->have_posts()){
                $query5->the_post();

                ?>
                <div class="col-lg-5 col-md-12 col-sm-12 col-12 post5-text-container">

                        <?php
                        the_title('<h2 class="post5-title">', '</h2>');
                        ?>
                        
                        <?php the_content(); ?>

                        <form class="post5-form">
                            
                            <label for="post5-form-name" class="post5-label">Nome</label>
                            <input type="text" class="post5-input" name="post5-form-name" placeholder="Paloma Alonso">

                            <label for="post5-form-email" class="post5-label">E-mail</label>
                            <input type="text" class="post5-input" name="post5-form-email" placeholder="Digite seu e-mail">

                            <label for="post5-form-phone" class="post5-label">Telefone</label>
                            <input type="text" class="post5-input" name="post5-form-phone" placeholder="Digite seu telefone">

                            <div class="post5-form-sm">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="post5-form-state" class="post5-label">Estado</label>
                                        <select class="post5-input" name="post5-form-state" >
                                            <option selected> Escolha seu estado </option>
                                            <option> MG </option>
                                            <option> SP </option>
                                            <option> RJ </option>
                                            <option> ES </option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="post5-form-city" class="post5-label">Cidade</label>
                                        <input type="text" class="post5-input" name="post5-form-city" placeholder="Digite sua cidade">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="post5-submit" value="The quick brown">

                        </form>


                    </div>

                    <div class="col-lg-5 col-md-12 col-sm-12 col-12 post5-image-container">

                        <?php
                        the_post_thumbnail();
                        ?>

                    </div>
            <?php }
        }
        ?>
        </div>
    </div>
</div>

<div class="post6-generic-container container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 post6-text-container">
            
            <?php
            if($query6->have_posts()){
                while($query6->have_posts()){
                    $query6->the_post();

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
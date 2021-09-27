<?php

// Adicionando recursos simples
function addResources(){
    add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'addResources');

// Registro do menu de navegação
function registerMenu(){
    register_nav_menu(
        'navigation-menu',
        'Menu de Navegação'
    );
}
add_action('init', 'registerMenu');

// Registro dos posts personalizados
function registerCustomPosts(){
    register_post_type('frontpage-post-1', array(
        'labels' => array('name' => 'Pág. Inicial: Post 1'),
		'description' => 'Primeiro post da página inicial',
        'public' => true,
        'menu_position' => 3,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
	register_post_type('frontpage-post-2', array(
        'labels' => array('name' => 'Pág. Inicial: Post 2'),
		'description' => 'Segundo post da página inicial',
        'public' => true,
        'menu_position' => 4,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
	register_post_type('frontpage-post-3', array(
        'labels' => array('name' => 'Pág. Inicial: Post 3'),
		'description' => 'Terceiro post da página inicial',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
	register_post_type('frontpage-post-4', array(
        'labels' => array('name' => 'Pág. Inicial: Post 4'),
		'description' => 'Quarto post da página inicial (carrosel)',
        'public' => true,
        'menu_position' => 6,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
    register_post_type('frontpage-post-5', array(
        'labels' => array('name' => 'Pág. Inicial: Post 5'),
		'description' => 'Quinto post da página inicial',
        'public' => true,
        'menu_position' => 7,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
    register_post_type('frontpage-post-6', array(
        'labels' => array('name' => 'Pág. Inicial: Post 6'),
		'description' => 'Sexto post da página inicial',
        'public' => true,
        'menu_position' => 8,
        'supports' => array('title', 'editor')
    ));
    register_post_type('innerpage-post-1', array(
        'labels' => array('name' => 'Pág. Interna: Post 1'),
		'description' => 'Primeiro post da página interna',
        'public' => true,
        'menu_position' => 9,
        'supports' => array('title', 'thumbnail')
    ));
    register_post_type('innerpage-post-2', array(
        'labels' => array('name' => 'Pág. Interna: Post 2'),
		'description' => 'Segundo post da página interna',
        'public' => true,
        'menu_position' => 9,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
    register_post_type('innerpage-post-3', array(
        'labels' => array('name' => 'Pág. Interna: Post 3'),
		'description' => 'Terceiro post da página interna',
        'public' => true,
        'menu_position' => 10,
        'supports' => array('title', 'editor')
    ));
}
add_action('init', 'registerCustomPosts');

// Registro das metaboxes
function registerMetabox(){
    add_meta_box(
        'post1-subtitle', 
        'Subtítulo', 
        'post1CallbackSubtitle',
        'frontpage-post-1'
    );
	add_meta_box(
        'post1-buttons', 
        'Botões', 
        'post1CallbackButtons',
        'frontpage-post-1'
    );
	add_meta_box(
        'post3-subtitle', 
        'Subtítulo', 
        'post3CallbackSubtitle',
        'frontpage-post-3'
    );
	add_meta_box(
        'post3-list', 
        'Lista', 
        'post3CallbackList',
        'frontpage-post-3'
    );
    add_meta_box(
        'ip-post2-subtitle', 
        'Subtítulo', 
        'ipPost2CallbackSubtitle',
        'innerpage-post-2'
    );
    add_meta_box(
        'ip-post2-list', 
        'Lista', 
        'ipPost2CallbackList',
        'innerpage-post-2'
    );
    add_meta_box(
        'ip-post2-button', 
        'Botão', 
        'ipPost2CallbackButton',
        'innerpage-post-2'
    );
    add_meta_box(
        'ip-post3-subtitle', 
        'Subtítulo', 
        'ipPost3CallbackSubtitle',
        'innerpage-post-3'
    );
    add_meta_box(
        'ip-post3-square', 
        'Quadrado', 
        'ipPost3CallbackSquare',
        'innerpage-post-3'
    );
    add_meta_box(
        'ip-post3-button', 
        'Botão', 
        'ipPost3CallbackButton',
        'innerpage-post-3'
    );
}
add_action('add_meta_boxes', 'registerMetabox');



// Constrói o HTML da metabox do subtítulo para o post 1
function post1CallbackSubtitle($post){
    $post1_subtitle1 = get_post_meta($post->ID, '_post1-subtitle1', true);
	$post1_subtitle2 = get_post_meta($post->ID, '_post1-subtitle2', true);

    ?>
        <label for="post1-subtitle1">Linha 1</label>
        <input type="text" name="post1-subtitle1" style="width: 100%" value=" <?= $post1_subtitle1 ?> "/>
		<label for="post1-subtitle2">Linha 2</label>
        <input type="text" name="post1-subtitle2" style="width: 100%" value=" <?= $post1_subtitle2 ?> "/>
    
	<?php
}

// Salva os dados inseridos na metabox do subtítulo para o post 1
function submitPost1Subtitles($post_id){
    foreach($_POST as $key=>$value){
        if($key !== 'post1-subtitle1' && $key !== 'post1-subtitle2'){
            continue;
        }

        update_post_meta(
            $post_id,
            '_'.$key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'submitPost1Subtitles');



// Constrói o HTML da metabox dos botões para o post 1
function post1CallbackButtons($post){
    $post1_button1 = get_post_meta($post->ID, '_post1-button1', true);
	$post1_button2 = get_post_meta($post->ID, '_post1-button2', true);

    ?>
        <label for="post1-button1">Botão 1</label>
        <input type="text" name="post1-button1" style="width: 100%" value=" <?= $post1_button1 ?> "/>
		<label for="post1-button2">Botão 2</label>
        <input type="text" name="post1-button2" style="width: 100%" value=" <?= $post1_button2 ?> "/>
    
	<?php
}

// Salva os dados inseridos na metabox dos botões para o post 1
function submitPost1Buttons($post_id){
    foreach($_POST as $key=>$value){
        if($key !== 'post1-button1' && $key !== 'post1-button2'){
            continue;
        }

        update_post_meta(
            $post_id,
            '_'.$key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'submitPost1Buttons');



// Constrói o HTML da metabox do subtítulo para o post 3
function post3CallbackSubtitle($post){
    $post3_subtitle1 = get_post_meta($post->ID, '_post3-subtitle1', true);
	$post3_subtitle2 = get_post_meta($post->ID, '_post3-subtitle2', true);

    ?>
        <label for="post3-subtitle1">Linha 1</label>
        <input type="text" name="post3-subtitle1" style="width: 100%" value=" <?= $post3_subtitle1 ?> "/>
		<label for="post3-subtitle2">Linha 2</label>
        <input type="text" name="post3-subtitle2" style="width: 100%" value=" <?= $post3_subtitle2 ?> "/>
    
	<?php
}

// Salva os dados inseridos na metabox do subtítulo para o post 3
function submitPost3Subtitle($post_id){
    foreach($_POST as $key=>$value){
        if($key !== 'post3-subtitle1' && $key !== 'post3-subtitle2'){
            continue;
        }

        update_post_meta(
            $post_id,
            '_'.$key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'submitPost3Subtitle');



// Constrói o HTML da metabox da lista para o post 3
function post3CallbackList($post){
    $post3_item1 = get_post_meta($post->ID, '_post3-item1', true);
	$post3_item2 = get_post_meta($post->ID, '_post3-item2', true);
	$post3_item3 = get_post_meta($post->ID, '_post3-item3', true);
	$post3_item4 = get_post_meta($post->ID, '_post3-item4', true);

    ?>
        <label for="post3-item1">Item 1</label>
        <input type="text" name="post3-item1" style="width: 100%" value=" <?= $post3_item1 ?> "/>
		<label for="post3-item2">Item 2</label>
        <input type="text" name="post3-item2" style="width: 100%" value=" <?= $post3_item2 ?> "/>
		<label for="post3-item3">Item 3</label>
        <input type="text" name="post3-item3" style="width: 100%" value=" <?= $post3_item3 ?> "/>
		<label for="post3-item4">Item 4</label>
        <input type="text" name="post3-item4" style="width: 100%" value=" <?= $post3_item4 ?> "/>
    
	<?php
}

// Salva os dados inseridos na metabox da lista para o post 3
function submitPost3List($post_id){
    foreach($_POST as $key=>$value){
        if($key !== 'post3-item1' && $key !== 'post3-item2' && $key !== 'post3-item3' && $key !== 'post3-item4'){
            continue;
        }

        update_post_meta(
            $post_id,
            '_'.$key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'submitPost3List');



// Constrói o HTML da metabox do subtítulo para o post 2 (página interna)
function ipPost2CallbackSubtitle($post){
    $ip_post2_subtitle = get_post_meta($post->ID, '_ip_post2_subtitle', true);


    ?>
        <label for="ip_post2_subtitle">Linha 1</label>
        <input type="text" name="ip_post2_subtitle" style="width: 100%" value=" <?= $ip_post2_subtitle ?> "/>
	<?php
}

// Salva os dados inseridos na metabox do subtítulo para o post 2 (página interna)
function submitIpPost2Subtitle($post_id){
    foreach($_POST as $key=>$value){
        if($key !== 'ip_post2_subtitle'){
            continue;
        }

        update_post_meta(
            $post_id,
            '_'.$key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'submitIpPost2Subtitle');



// Constrói o HTML da metabox da lista para o post 2 (página interna)
function ipPost2CallbackList($post){
    $ip_post2_item1 = get_post_meta($post->ID, '_ip_post2_item1', true);
    $ip_post2_item2 = get_post_meta($post->ID, '_ip_post2_item2', true);
    $ip_post2_item3 = get_post_meta($post->ID, '_ip_post2_item3', true);


    ?>
        <label for="ip_post2_item1">Item 1</label>
        <input type="text" name="ip_post2_item1" style="width: 100%" value=" <?= $ip_post2_item1 ?> "/>
        <label for="ip_post2_item2">Item 2</label>
        <input type="text" name="ip_post2_item2" style="width: 100%" value=" <?= $ip_post2_item2 ?> "/>
        <label for="ip_post2_item3">Item 3</label>
        <input type="text" name="ip_post2_item3" style="width: 100%" value=" <?= $ip_post2_item3 ?> "/>
	<?php
}

// Salva os dados inseridos na metabox do subtítulo para o post 2 (página interna)
function submitIpPost2List($post_id){
    foreach($_POST as $key=>$value){
        if($key !== 'ip_post2_item1' && $key !== 'ip_post2_item2' && $key !== 'ip_post2_item3'){
            continue;
        }

        update_post_meta(
            $post_id,
            '_'.$key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'submitIpPost2List');



// Constrói o HTML da metabox do botão para o post 2 (página interna)
function ipPost2CallbackButton($post){
    $ip_post2_button = get_post_meta($post->ID, '_ip_post2_button', true);

    ?>
        <label for="ip_post2_button">Botão</label>
        <input type="text" name="ip_post2_button" style="width: 100%" value=" <?= $ip_post2_button ?> "/>
	<?php
}

// Salva os dados inseridos na metabox do botão para o post 2 (página interna)
function submitIpPost2Button($post_id){
    foreach($_POST as $key=>$value){
        if($key !== 'ip_post2_button'){
            continue;
        }

        update_post_meta(
            $post_id,
            '_'.$key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'submitIpPost2Button');



// Constrói o HTML da metabox do subtítulo para o post 3 (página interna)
function ipPost3CallbackSubtitle($post){
    $ip_post3_subtitle = get_post_meta($post->ID, '_ip_post3_subtitle', true);

    ?>
        <label for="ip_post3_subtitle">Subtítulo</label>
        <input type="text" name="ip_post3_subtitle" style="width: 100%" value=" <?= $ip_post3_subtitle ?> "/>
	<?php
}

// Salva os dados inseridos na metabox do subtítulo para o post 3 (página interna)
function submitIpPost3Subtitle($post_id){
    foreach($_POST as $key=>$value){
        if($key !== 'ip_post3_subtitle'){
            continue;
        }

        update_post_meta(
            $post_id,
            '_'.$key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'submitIpPost3Subtitle');



// Constrói o HTML da metabox das div quadradinhas para o post 3 (página interna)
function ipPost3CallbackSquare($post){
    $ip_post3_squareTitle1 = get_post_meta($post->ID, '_ip_post3_squareTitle1', true);
    $ip_post3_squareContent1 = get_post_meta($post->ID, '_ip_post3_squareContent1', true);
    $ip_post3_squareTitle2 = get_post_meta($post->ID, '_ip_post3_squareTitle2', true);
    $ip_post3_squareContent2 = get_post_meta($post->ID, '_ip_post3_squareContent2', true);
    $ip_post3_squareTitle3 = get_post_meta($post->ID, '_ip_post3_squareTitle3', true);
    $ip_post3_squareContent3 = get_post_meta($post->ID, '_ip_post3_squareContent3', true);


    ?>
        <label for="ip_post3_squareTitle1">Título 1</label>
        <input type="text" name="ip_post3_squareTitle1" style="width: 100%" value=" <?= $ip_post3_squareTitle1 ?> "/>

        <label for="ip_post3_squareContent1">Conteúdo 1</label>
        <input type="text" name="ip_post3_squareContent1" style="width: 100%" value=" <?= $ip_post3_squareContent1 ?> "/>

        <label for="ip_post3_squareTitle2">Título 2</label>
        <input type="text" name="ip_post3_squareTitle2" style="width: 100%" value=" <?= $ip_post3_squareTitle2 ?> "/>

        <label for="ip_post3_squareContent2">Conteúdo 2</label>
        <input type="text" name="ip_post3_squareContent2" style="width: 100%" value=" <?= $ip_post3_squareContent2 ?> "/>

        <label for="ip_post3_squareTitle3">Título 3</label>
        <input type="text" name="ip_post3_squareTitle3" style="width: 100%" value=" <?= $ip_post3_squareTitle3 ?> "/>

        <label for="ip_post3_squareContent3">Conteúdo 3</label>
        <input type="text" name="ip_post3_squareContent3" style="width: 100%" value=" <?= $ip_post3_squareContent3 ?> "/>

	<?php
}

// Salva os dados inseridos na metabox das div quadradinhas para o post 3 (página interna)
function submitIpPost3Square($post_id){
    foreach($_POST as $key=>$value){
        if($key !== 'ip_post3_squareTitle1' && $key !== 'ip_post3_squareContent1' 
        && $key !== 'ip_post3_squareTitle2' && $key !== 'ip_post3_squareContent2'
        && $key !== 'ip_post3_squareTitle3' && $key !== 'ip_post3_squareContent3'
        ){
            continue;
        }

        update_post_meta(
            $post_id,
            '_'.$key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'submitIpPost3Square');



// Constrói o HTML da metabox do botão para o post 3 (página interna)
function ipPost3CallbackButton($post){
    $ip_post3_button = get_post_meta($post->ID, '_ip_post3_button', true);

    ?>
        <label for="ip_post3_button">Botão</label>
        <input type="text" name="ip_post3_button" style="width: 100%" value=" <?= $ip_post3_button ?> "/>
	<?php
}

// Salva os dados inseridos na metabox do botão para o post 2 (página interna)
function submitIpPost3Button($post_id){
    foreach($_POST as $key=>$value){
        if($key !== 'ip_post3_button'){
            continue;
        }

        update_post_meta(
            $post_id,
            '_'.$key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'submitIpPost3Button');



// Linka o script do burger menu para mobile
function burgerMenuScript(){
    wp_enqueue_script( 
        'burger-menu-script', 
        get_stylesheet_directory_uri().'/js/burger-menu.js', 
        array( 'jquery' )
    );
}
add_action('wp_enqueue_scripts', 'burgerMenuScript');

// Linka o script do bootstrap
function bootstrapScript(){
    wp_enqueue_script( 
        'bootstrap-script', 
        get_stylesheet_directory_uri().'/js/bootstrap.js'
    );
}
add_action('wp_enqueue_scripts', 'bootstrapScript');

// Registra os widgets para o footer
function widgetsInit() {
    register_sidebar( array(
		'name'          => 'Grupo 1',
		'id'            => 'group1',
		'before_widget' => '<div>',
		'after_widget'  => '</div class="group1">',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => 'Grupo 2',
		'id'            => 'group2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Contato',
		'id'            => 'contact-info',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => 'Redes Sociais',
		'id'            => 'social-media',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'widgetsInit' );


?>
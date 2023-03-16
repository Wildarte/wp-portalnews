<?php

    $titulo_noticias_quentes = get_field('titulo_one');
    $subtitulo_noticias_quentes = get_field('subtitulo_one');

    $mod_left_hot_post = get_field('coluna_esquerda_hot_left');
    $mod_right_hot_post = get_field('coluna_direita_hot_right');

    $args_left = [
        'post_type' => 'post',
        'cat' => $mod_left_hot_post,
        'posts_per_page' => 1
    ];

    $args_right = [
        'post_type' => 'post',
        'cat' => $mod_right_hot_post,
        'posts_per_page' => 1
    ];

    $results_mod_left = new WP_Query($args_left);
    $results_mod_right = new WP_Query($args_right);

?>

<header class="header_two_col">
    <div class="content_header_two_col">
    <h2 class="title-section"><?= $titulo_noticias_quentes != "" ? $titulo_noticias_quentes : "Notícias quentes"; ?></h2>
    <p><?= $subtitulo_noticias_quentes != "" ? $subtitulo_noticias_quentes : "Notícias quentes"; ?></p>
    </div>
    <div class="row_gray"></div>
</header>

<section class="list_two_col d-flex">
    <div class="f-50 list_two_left">

    <?php
        if($results_mod_left->have_posts()):
            while($results_mod_left->have_posts()):
                $results_mod_left->the_post();
    ?>
    <header class="header_module">
        <h2><?= get_cat_name($mod_left_hot_post); ?> <span></span></h2>
    </header>
    <article class="post_dubble_col">
        <div class="post_dubble_left">
        <a href="" class="link_thumb_post_dubble_col">
            <img src="<?= get_the_post_thumbnail_url(null, 'medium'); ?>" alt="">
        </a>

        <h2 class="title_post_dubble_col">
            <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
        </h2>

        </div>
        <div class="post_dubble_right">
        <p class="info_post_dubble_col"><small><span class="info_post_dubble_col_date"><?= get_the_date(); ?> </span> | <span class="info_post_dubble_col_category"><?= get_the_category()[0]->name; ?></span> | por <span class="info_post_dubble_col_author"><?= get_the_author(); ?></span></small></p>

        <div class="post_dubble_resume">
            <p>
                <?= get_the_excerpt(); ?>
            </p>
        </div>

        <a href="<?= get_the_permalink(); ?>" class="link_post_dubble">Ler Mais</a>
        </div>
        
    </article>

    <?php endwhile; endif; wp_reset_query() ?>
    </div>
    
    <div class="f-50 list_two_right">
    <?php
        if($results_mod_right->have_posts()):
            while($results_mod_right->have_posts()):
                $results_mod_right->the_post();
    ?>
    <header class="header_module">
        <h2><?= get_cat_name($mod_right_hot_post); ?> <span></span></h2>
    </header>
    <article class="post_dubble_col">
        <div class="post_dubble_left">
        <a href="" class="link_thumb_post_dubble_col">
            <img src="<?= get_the_post_thumbnail_url(null, 'medium'); ?>" alt="">
        </a>

        <h2 class="title_post_dubble_col">
            <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
        </h2>

        </div>
        <div class="post_dubble_right">
        <p><small><span class="info_post_dubble_col_date"><?= get_the_date(); ?> </span> | <span class="info_post_dubble_col_category"><?= get_the_category()[0]->name; ?></span> | por <span class="info_post_dubble_col_author"><?= get_the_author(); ?></span></small></p>

        <div class="post_dubble_resume">
            <p>
                <?= get_the_excerpt(); ?>
            </p>
        </div>

        <a href="<?= get_the_permalink(); ?>" class="link_post_dubble">Ler Mais</a>
        </div>
        
    </article>
    <?php endwhile; endif; wp_reset_query() ?>
    </div>
    
</section>
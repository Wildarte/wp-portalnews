<?php 

    $cat_mod = get_field('categoria_sibdebar_left');
    $list_sidebar_left = get_field('list_sidebar_left');

?>

<?php

    $args = [
        'post_type' => 'post',
        'cat' => $cat_mod,
        'posts_per_page' => $list_sidebar_left
    ];

    $results_cat_module1 = new WP_Query($args);

    

?>

<header class="header_module">
    <h2><?= get_cat_name($cat_mod); ?> <span></span></h2>
</header>
<section class="content_module">
    <?php


        if($results_cat_module1->have_posts()):
        
            while($results_cat_module1->have_posts()):
                $results_cat_module1->the_post();

    ?>
    <article class="card_module">
        <span class="category_module">
            <a href="<?= get_category_link(get_the_category()[0]->term_id); ?>"><?= get_the_category()[0]->name; ?></a>
        </span>

        <h3 class="title_module">
            <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
        </h3>

        <p class="resume_module"><?= get_the_excerpt(); ?></p>
    </article>

    <?php endwhile; endif; wp_reset_query(); ?>



</section>


<?php 

    $cat_mod = get_field('categoria_sibdebar_left');
    $list_sidebar_left = get_field('list_sidebar_left');

?>

<?php

    $args = [
        'post_type' => 'post',
        'cat' => $cat_mod,
        'posts_per_page' => 4
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
        <a href="<?= get_term_link(get_the_category()[0]->term_id); ?>"><?= get_the_category()[0]->name; ?></a>
        </span>

        <h3 class="title_module">
            <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
        </h3>

        <p class="resume_module"><?= get_the_excerpt(); ?></p>
    </article>

    <?php endwhile; endif; wp_reset_query(); ?>

    <!-- 
    <article class="card_module">
        <span class="category_module">
            <a href="">Culture</a>
        </span>

        <h3 class="title_module">
            <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
        </h3>

        <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
    </article>
     -->

</section>


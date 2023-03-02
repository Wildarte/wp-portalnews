<?php

    $cat_bloco_3 = get_field('cat_bloco_3');

?>


<header class="header_two_col">
    <div class="content_header_two_col">
    <h2 class="title-section"><?= get_cat_name($cat_bloco_3); ?></h2>
    <p><?= category_description($cat_bloco_3); ?></p>
    </div>
    <div class="row_gray"></div>
</header>

<!-- 
<section class="list_row_modules d-flex">
    <div class="f-25 col_list_row">
    <header class="header_module">
        <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
    </header>
    <article class="card_module">
        <span class="category_module">
        <a href="">Culture</a>
        </span>

        <h3 class="title_module">
        <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
        </h3>

        <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
    </article>
    </div>
    
    <div class="f-25 col_list_row">
    <header class="header_module">
        <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
    </header>
    <article class="card_module">
        <span class="category_module">
        <a href="">Culture</a>
        </span>

        <h3 class="title_module">
        <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
        </h3>

        <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
    </article>
    </div>

    <div class="f-25 col_list_row">
    <header class="header_module">
        <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
    </header>
    <article class="card_module">
        <span class="category_module">
        <a href="">Culture</a>
        </span>

        <h3 class="title_module">
        <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
        </h3>

        <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
    </article>
    </div>

    <div class="f-25 col_list_row">
    <header class="header_module">
        <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
    </header>
    <article class="card_module">
        <span class="category_module">
        <a href="">Culture</a>
        </span>

        <h3 class="title_module">
        <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
        </h3>

        <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
    </article>
    </div>

</section>
-->

<section class="list_row_two d-flex">
    <div class="f-50 list_row_two_col">

    <?php

        $args = [
            'post_type' => 'post',
            'cat' => $cat_mod,
            'posts_per_page' => 3
        ];

        $results_cat_bloco_3 = new WP_Query($args);

        if($results_cat_bloco_3->have_posts()):

            while($results_cat_bloco_3->have_posts()):
                $results_cat_bloco_3->the_post();

    ?>
        <article class="post_default">
            <div class="info_post_default">
            <p><small><span class="info_post_default_date"><?= get_the_date('d/m/Y'); ?></span> | <span class="info_post_default_category"><?= get_the_category()[0]->name; ?></span> | por <span class="info_post_default_author"><?= get_the_author(); ?></span></small></p>
            </div>
            <h3 class="title_post_default">
                <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
            </h3>

            <p><?= get_the_excerpt(); ?></p>

            <a href="<?= get_the_permalink(); ?>" class="link_post_default"><strong>Ler Mais</strong></a>
        </article>

        <?php endwhile; endif; wp_reset_query(); ?>

    </div>

    <div class="f-25 list_row_two_col">
        <div class="module">
            <header class="header_module">
            <h2><?= get_cat_name($cat_bloco_3); ?> <span></span></h2>
            </header>

            <section class="content_module">
                <?php
                    $args = [
                        'post_type' => 'post',
                        'cat' => $cat_mod,
                        'posts_per_page' => 2,
                        'offset' => 3 //busca os post após os 3 últimos
                    ];

                    $results_bloc_sec_col = new WP_Query($args);

                    if($results_bloc_sec_col->have_posts()):

                        while($results_bloc_sec_col->have_posts()):
                            $results_bloc_sec_col->the_post();
                ?>
                <article class="card_module">

                    <span class="category_module">
                        <a href="<?= get_the_permalink(); ?>"><?= get_the_category()[0]->name; ?></a>
                    </span>

                    <h3 class="title_module">
                        <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
                    </h3>

                    <p class="resume_module"><?= get_the_excerpt(); ?></p>

                </article>

                <?php endwhile; endif; wp_reset_query() ?>

            </section>
        </div>
    </div>

    <div class="f-25 list_row_two_col">
    <div class="module">
        <header class="header_module">
        <h2><?= get_cat_name($cat_bloco_3); ?> <span></span></h2>
        </header>
        <section class="content_module">

            <?php
                $args = [
                    'post_type' => 'post',
                    'cat' => $cat_mod,
                    'posts_per_page' => 2,
                    'offset' => 5 //busca os post após os 5 últimos
                ];

                $results_bloc_sec_col2 = new WP_Query($args);

                if($results_bloc_sec_col2->have_posts()):

                    while($results_bloc_sec_col2->have_posts()):
                        $results_bloc_sec_col2->the_post();
            ?>
            <article class="card_module">

                <span class="category_module">
                    <a href="<?= get_the_permalink(); ?>"><?= get_the_category()[0]->name; ?></a>
                </span>

                <h3 class="title_module">
                    <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
                </h3>

                <p class="resume_module"><?= get_the_excerpt(); ?></p>

            </article>

            <?php endwhile; endif; wp_reset_query(); ?>

        </section>
    </div>
    </div>
</section>
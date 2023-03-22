<?php

$cor_principal_page = get_field('cor_principal_page');

?>

<style>
    .header_home3 h2{
        color: <?= $cor_principal_page; ?>
    }
</style>

<section class="section_home3">

    <div class="container d-flex">

        <div class="f-70 left_home3">

            <header class="header_home3">

                <h2><?= get_field('titulo_home_3'); ?></h2>

            </header>


            <?php

            $cat_geral_page = get_field('categoria_geral_page');

            $first_post = 0;

            $numero_de_posts_central = get_field('numero_de_posts_central');

            if($numero_de_posts_central == ""){
                $numero_de_posts_central = 3;
            }

            $args = [
                'post_type' => 'post',
                'posts_per_page' => 1,
                'cat' => $cat_geral_page
            ];

            $result_center_bloco = new WP_Query($args);

            if($result_center_bloco->have_posts()):
                while($result_center_bloco->have_posts()):
                    $result_center_bloco->the_post();

            ?>

            <article class="post_center_top">
                <a href="<?= get_the_permalink(); ?>" class="link_thumb_post_center">
                    <?= get_the_post_thumbnail(null, 'med-center') ?>
                </a>

                <h2 class="title_post_center_top">
                    <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
                </h2>

                <p><?=  get_the_excerpt(); ?></p>

                <div class="author_post_center_top">
                    <p>Por <strong><?= get_the_author(); ?></strong> / <?= get_the_date('d/m/Y'); ?></p>
                </div>
            </article>

            <?php endwhile; endif; wp_reset_query() ?>

            <section class="section_default">

            <?php

            $args = [
                'post_type' => 'post',
                'posts_per_page' => $numero_de_posts_central-1,
                'post__not_in' => [$first_post],
                'cat' => $cat_geral_page
            ];


            $result_center_bloco_feed = new WP_Query($args);

            if($result_center_bloco_feed->have_posts()):
                while($result_center_bloco_feed->have_posts()):
                    $result_center_bloco_feed->the_post();


            ?>


            <article class="post_default">
                <div class="info_post_default">
                <p><small><span class="info_post_default_date"><?= get_the_date('d/m/Y'); ?> </span> | <span class="info_post_default_category"><?= get_the_category()[0]->name; ?></span> | por <span class="info_post_default_author"><?= get_the_author(); ?></span></small></p>
                </div>
                <h3 class="title_post_default">
                <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
                </h3>

                <p><?=  get_the_excerpt(); ?></p>

                <a href="<?= get_the_permalink(); ?>" class="link_post_default"><strong>Ler Mais</strong></a>
            </article>

            <?php endwhile; endif; wp_reset_query() ?>


            </section>
            

            
        </div>

        <aside class="f-30 sidebar_home3">

        <?php $title_sidebar = get_field('titulo_sidebar_direita_home_3'); ?>

            <header class="header_right_content">
                <h2 class="title-section"><?= $title_sidebar ?></h2>
            </header>

            <?= get_field('script_sidebar_direita') ?>

            <section class="content_right_content content_module">
            <?php

                $results_side_right = new WP_Query($args);

                if($results_side_right->have_posts()):
                    while($results_side_right->have_posts()):
                        $results_side_right->the_post();

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

            <?php endwhile; endif; wp_reset_query() ?>

            </section> 
        </aside>

    </div>

</section>



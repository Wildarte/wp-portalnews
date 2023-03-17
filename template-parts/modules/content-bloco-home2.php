<section>

    <section class="container d-flex">

        <?php
            $link_post_fixo = get_field('link_post_fixo');

            $args = [
                'post_type' => 'post',
                'p' => $link_post_fixo,
                'posts_per_page' => 1
            ];

            $result_link_post_fixo = new WP_Query($args);

            if($result_link_post_fixo->have_posts()):
                $result_link_post_fixo->the_post();
        ?>

        <article class="width_full_post">
            <?= get_the_post_thumbnail(null, 'top_home2'); ?>

            <div class="info_width_full_post">
                
                <h2>
                    <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
                </h2>

                <p><?= get_the_excerpt(); ?></p>
            </div>

            <div class="flag_width_full_post">
                <?= get_the_category()[0]->name; ?>
            </div>
        </article>

        <?php endif; wp_reset_query(); ?>

    </section>

</section>

<section class="list_row_modules d-flex container">

    
        <?php
            $categoria_primeira_linha = get_field('categoria_primeira_linha');

            $args = [
                'post_type' => 'post',
                'cat' => $categoria_primeira_linha,
                'posts_per_page' => 4
            ];

            $result_categoria_primeira_linha = new WP_Query($args);

            if($result_categoria_primeira_linha->have_posts()):
                while($result_categoria_primeira_linha->have_posts()):
                    $result_categoria_primeira_linha->the_post();
        ?>

        <div class="f-25 col_list_row">
            <article class="card_module">
                <span class="category_module">
                    <a href="<?= get_category_link(get_the_category()[0]->term_id); ?>"><?= get_the_category()[0]->name; ?></a>
                </span>

                <h3 class="title_module">
                    <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
                </h3>

                <p class="resume_module"><?= get_the_excerpt(); ?></p>
            </article>
        </div>

        <?php endwhile; endif; wp_reset_query(); ?>

</section>


<section class="list_row_modules d-flex container">

    <?php
        $categoria_segunda_linha = get_field('categoria_segunda_linha');

        $args = [
            'post_type' => 'post',
            'cat' => $categoria_segunda_linha,
            'posts_per_page' => 4
        ];

        $result_categoria_segunda_linha = new WP_Query($args);

        if($result_categoria_segunda_linha->have_posts()):
            while($result_categoria_segunda_linha->have_posts()):
                $result_categoria_segunda_linha->the_post();
    ?>

    <div class="f-25 col_list_row">
        <header class="header_module">
            <h2><?= get_the_category()[0]->name; ?> <span></span></h2>
        </header>
        <article class="card_module">

            <h3 class="title_module">
            <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
            </h3>

            <p class="resume_module"><?= get_the_excerpt(); ?></p>
        </article>
    </div>

    <?php endwhile; endif; wp_reset_query(); ?>

</section>
<style>
    figure.thumbnail_post img{
        height: 500px;
    }
    .related_posts .post_simple img{
        height: 200px;
    }

    @media(max-width: 768px){
        figure.thumbnail_post img{
            height: 400px;
        }
        .related_posts .post_simple img{
            height: 300px;
        }
    }
    @media(max-width: 420px){
        figure.thumbnail_post img{
            height: 200px;
        }
        .related_posts .post_simple img{
            height: 180px;
        }
    }
</style>

<div class="page_day_word">

    <div class="header_day_word">
        <h4>Palavra do Dia</h4>
        <h2><?= get_the_title(); ?></h2>
    </div>

    <figure class="thumbnail_post">
        <?= get_the_post_thumbnail(null, 'post-thumb') ?>
        <figcaption><?= get_the_post_thumbnail_caption() ?></figcaption>
    </figure>

    <div class="over_body_day_word">
        <?php the_content(); ?>
    </div>

    <div class="related_posts">
            <?php
                $cat_post = get_the_category()[0]->slug;


                $args_cat_post = [
                    'post_type' => 'post',
                    'category_name' => $cat_post,
                    'post__not_in' => [''.get_the_ID().''],
                    'posts_per_page' => 3
                ];

                $results_cat_post = new WP_Query($args_cat_post);
                
                
                if($results_cat_post->have_posts()):
            ?> 

            <header class="header_related_posts">
                <h3>Artigos Relacionados</h3>
            </header>
            <div class="list_section_simple d-flex">
                <?php while($results_cat_post->have_posts()): $results_cat_post->the_post(); ?>

                <article class="post_simple f-25">
                    <a href="<?= get_the_permalink() ?>">
                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_image_alt($id) ?>" title="<?= get_image_alt($id) ?>">
                    </a>
    
                    <div class="info_post_simple">
                    <p><small><span class="date_post_simple"><?=  get_the_date('d/m/Y') ?></span> | <span class="category_post_simple color-red"><?= get_the_category()[0]->name; ?></span></small></p>
                    </div>
    
                    <h3 class="title_post_simple">
                    <a href="<?= get_the_permalink() ?>"><?=  get_the_title(); ?></a>
                    </h3>
    
                    <a href="<?= get_the_permalink() ?>" class="link_post_simple">Ler Mais</a>
                </article>

                <?php endwhile; wp_reset_query() ?>
            </div>
            <?php endif; ?>
        </div>

</div>
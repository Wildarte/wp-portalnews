<div class="content_post f-70">
        <header class="header_content_post">
            <div class="top_header_post d-flex">
                <div class="left_top_header_post f-50">
                    <a href="<?= home_url(); ?>">
                        home
                    </a>
                </div>

                <div class="right_top_header_post f-50 d-flex">
                    <?php

                        $views_count = get_post_meta(get_the_ID(), 'wpb_post_views_count', true);
                        $exibir_numero_de_views = get_field('exibir_numero_de_views');
                        $show_view_all_post = get_field('show_view_all_post');

                        if($views_count > 0):
                            if(!$exibir_numero_de_views && !$show_view_all_post):
                    ?>
                    <div><small><span><?php //$views_count; ?></span> </small> | </div>
                        <?php endif; endif; ?>

                    <div> <small><span> <!--  <?= comments_number() ?>  --></span></small></div>
                </div>
            </div>

            <div class="title_header_post">
                <h1><?=  get_the_title() ?></h1>  
            </div> 

            <div class="bottom_header_post d-flex">
                <div class="f-50 left_bottom_header_post">
                    <?php $link_cat = get_category_link($cat->term_id); ?>
                    <p><small><span><?= get_the_date('j \d\e M \d\e Y'); ?></span><?= $link_cat != "" ? " | em " : ""; ?><strong><a href="<?= $link_cat; ?>"><?= $cat->name; ?></a></strong></small></p>
                </div>
                <div class="f-50 d-flex right_bottom_header_post">
                <a class="link_twitter" href="https://twitter.com/intent/tweet?url=<?= get_the_permalink() ?>&text="><i class="bi bi-twitter"></i> Twitter</a>

                <a class="link_facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= get_the_permalink() ?>/"><i class="bi bi-facebook"></i> Facebook</a>

                <a class="link_whatsapp" href="https://wa.me/send?text=<?= get_the_permalink() ?>"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                </div>
            </div>
        </header>

        <div class="body_post">
            <figure class="thumbnail_post">
                <?= get_the_post_thumbnail(null, 'post-thumb') ?>
                <figcaption><?= get_the_post_thumbnail_caption() ?></figcaption>
            </figure>

            <div class="alternative_intro">
                <p></p>
            </div>
            
            <div class="body_content_post">
                
            <?=  get_the_content(); ?>

            </div>

            <div class="tags_post">
                <?= get_the_tag_list(); ?>
            </div>

            <div class="info_author_post d-flex">
                <div class="thumb_author">
                <?php $mail_user = strval(get_the_author_meta('user_email', false)); ?>
                    <img src="<?= get_avatar_url($mail_user, '32', '', '', null) ?>" alt="">
                </div>
                <div class="info_author">
                    <h3><?= get_the_author(); ?></h3>
                    <p><?= get_the_author_meta('description'); ?></p>
                </div>
            </div>

            

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

    

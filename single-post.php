<?php get_header(); $cat = get_the_category()[0];  ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php wpb_set_post_views(get_the_ID()); ?>
<main>
    <section class="content_page">
        <div class="container d-flex">
            
            <?php

                if(get_the_category()[0]->slug != "palavra-do-dia"):

                    get_template_part('template-parts/content', 'single-post');

                    echo '<aside class="f-30 sidebar_post">';

                        get_sidebar('blog');
                
                    echo '</aside>';

                else:

                    get_template_part('template-parts/content','single-post-2');

                endif;

            ?>

        </div>
    </section>
</main>
<?php endwhile; endif; ?>
<?php get_footer() ?>

<div class="content_sidebar_post">
    
    <?= get_search_form(); ?>

    <div class="item-widget">
        <h3>Artigos Recentes</h3>

        <ul class="list_post_sidebar">
            <?php
                $args = [
                    'post_type' => 'post',
                    'post__not_in' => [''.get_the_ID().''],
                    'posts_per_page' => 4
                ];
                
                $results_side = new WP_Query($args);

                if($results_side->have_posts()):

                    while($results_side->have_posts()):

                        $results_side->the_post();
            ?>
            <li><a href="<?= get_the_permalink(); ?>"><?=  get_the_title() ?></a></li>
            <?php endwhile; endif; wp_reset_query() ?>
        </ul>
    </div>

    <div class="item-widget">
        <h3>Tags</h3>

        <ul class="list_tag_sidebar">
            <?= wp_tag_cloud() ?>
            
        </ul>
    </div>
    <div class="item-widget">
        <h3>Ads</h3>

        <img src="https://cdn.pixabay.com/photo/2017/12/17/14/12/bitcoin-3024279__340.jpg" alt="">
    </div>

    <?php

        if(is_active_sidebar('sidebar-blog')):

            dynamic_sidebar('sidebar-blog');
            
        endif;

    ?>
</div>
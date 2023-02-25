<?php

    $first_post = 0;

    $args = [
        'post_type' => 'post',
        'posts_per_page' => 1
    ];

    $result_center_bloco = new WP_Query($args);

    if($result_center_bloco->have_posts()):
        while($result_center_bloco->have_posts()):
            $result_center_bloco->the_post();

?>

<article class="post_center_top">
    <a href="<?= get_the_permalink(); ?>" class="link_thumb_post_center">
        <img src="https://cdn.pixabay.com/photo/2016/12/19/20/18/arable-1918993__340.jpg" alt="">
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
        'posts_per_page' => 3,
        'post__not_in' => [$first_post]
    ];


    $result_center_bloco_feed = new WP_Query($args);

    if($result_center_bloco_feed->have_posts()):
        while($result_center_bloco_feed->have_posts()):
            $result_center_bloco_feed->the_post();


?>


    <article class="post_default">
        <div class="info_post_default">
        <p><small><span class="info_post_default_date">02/02/2022 </span> | <span class="info_post_default_category">Esporte</span> | por <span class="info_post_default_author"><?= get_the_author(); ?></span></small></p>
        </div>
        <h3 class="title_post_default">
        <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
        </h3>

        <p><?=  get_the_excerpt(); ?></p>

        <a href="<?= get_the_permalink(); ?>" class="link_post_default"><strong>Ler Mais</strong></a>
    </article>

    <?php endwhile; endif; wp_reset_query() ?>

    <!-- 

    <article class="post_default">
        <div class="info_post_default">
        <p><small><span class="info_post_default_date">02/02/2022 </span> | <span class="info_post_default_category">Esporte</span> | por <span class="info_post_default_author">Admin</span></small></p>
        </div>
        <h3 class="title_post_default">
        <a href="">The Best College Football Team You’ve Probably Never Heard Of</a>
        </h3>

        <p>Aenean rhoncus gravida nisl vel pretium. Nam ac nisl non ipsum vestibulum vehicula vulputate sagittis magna.</p>

        <a href="" class="link_post_default"><strong>Ler Mais</strong></a>
    </article>

    <article class="post_default">
        <div class="info_post_default">
        <p><small><span class="info_post_default_date">02/02/2022 </span> | <span class="info_post_default_category">Esporte</span> | por <span class="info_post_default_author">Admin</span></small></p>
        </div>
        <h3 class="title_post_default">
        <a href="">The Best College Football Team You’ve Probably Never Heard Of</a>
        </h3>

        <p>Aenean rhoncus gravida nisl vel pretium. Nam ac nisl non ipsum vestibulum vehicula vulputate sagittis magna.</p>

        <a href="" class="link_post_default"><strong>Ler Mais</strong></a>
    </article>

     -->

</section>
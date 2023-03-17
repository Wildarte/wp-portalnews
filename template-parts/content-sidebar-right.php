<?php

    $type_list_post_sidebar_right = get_field('type_list_post_sidebar_right');
    $cat_geral_page = get_field('categoria_geral_page');
    $quantos_posts_listar = get_field('quantos_posts_listar');

    $title_sidebar = 'feed diário'; 

    switch($type_list_post_sidebar_right):
        case "mais vistos":
            $args = [
                'post_type' => 'post',
                'meta_key' => 'wpb_post_views_count',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'posts_per_page' => $quantos_posts_listar,
            ];
            $title_sidebar = 'mais vistos';
        break;
        case "categoria da página":
            $args = [
                'post_type' => 'post',
                'posts_per_page' => $quantos_posts_listar,
                'cat' => $cat_geral_page
            ];
            $title_sidebar = 'feed diário';
        break;
        case "útimos posts":
            $args = [
                'post_type' => 'post',
                'posts_per_page' => $quantos_posts_listar,
            ];
            $title_sidebar = 'últimos posts';
        break;
        default:
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 6,
            ];
        endswitch;
    
?>

<?= get_field('scripts_sidebar_right') ?>

<header class="header_right_content">
    <h2 class="title-section"><?= $title_sidebar ?></h2>
</header>

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
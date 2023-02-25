<header class="header_right_content">
    <h2 class="title-section">Feed Diário</h2>
</header>

<section class="content_right_content content_module">
<?php

    $args = [
        'post_type' => 'post',
        'posts_per_page' => 6
    ];

    $results_side_right = new WP_Query($args);

    if($results_side_right->have_posts()):
        while($results_side_right->have_posts()):
            $results_side_right->the_post();

?>
    <article class="card_module">
        <span class="category_module">
            <a href=""><?= get_the_category()[0]->name; ?></a>
        </span>

        <h3 class="title_module">
            <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
        </h3>

        <p class="resume_module"><?= get_the_excerpt(); ?></p>
    </article>

<?php endwhile; endif; ?>

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

    <article class="card_module">
        <span class="category_module">
        <a href="">Culture</a>
        </span>

        <h3 class="title_module">
        <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
        </h3>

        <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
    </article>

    <article class="card_module">
        <span class="category_module">
        <a href="">Culture</a>
        </span>

        <h3 class="title_module">
        <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
        </h3>

        <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
    </article>

    <article class="card_module">
        <span class="category_module">
        <a href="">Culture</a>
        </span>

        <h3 class="title_module">
        <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
        </h3>

        <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
    </article>

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
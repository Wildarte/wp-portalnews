<header class="header_two_col">
    <div class="content_header_two_col">
        <h2 class="title-section">Notícias quentes</h2>
        <p>Últimas notícias mais quentes</p>
    </div>
    <div class="row_gray"></div>
</header>
<div class="list_section_simple d-flex">

    <?php

        $args = [
            'post_type' => 'post',
            'posts_per_page' => 8
        ];

        $results_list_post = new WP_Query($args);

        if($results_list_post->have_posts()):
            while($results_list_post->have_posts()):
                $results_list_post->the_post();

    ?>

    <article class="post_simple f-25">
        <a href="<?=  get_the_permalink(); ?>">
            <?= get_the_post_thumbnail(null, 'medium') ?>
        </a>

        <div class="info_post_simple">
            <p><small><span class="date_post_simple"><?=  get_the_date(); ?></span> | <span class="category_post_simple color-red"><?= get_the_category()[0]->name; ?></span></small></p>
        </div>

        <h3 class="title_post_simple">
            <a href="<?=  get_the_permalink(); ?>"><?=  get_the_title(); ?></a>
        </h3>

        <p class="resume_post_simple"><?= get_the_excerpt(); ?></p>

        <a href="<?=  get_the_permalink(); ?>" class="link_post_simple">Ler Mais</a>
    </article>

    <?php endwhile; endif; wp_reset_query(); ?>

    <!-- 
    <article class="post_simple f-25">
    <a href="">
        <img src="https://cdn.pixabay.com/photo/2020/03/09/15/59/scifi-4916165__340.jpg" alt="">
    </a>

    <div class="info_post_simple">
        <p><small><span class="date_post_simple">11/05/2017</span> | <span class="category_post_simple color-red">SAÚDE</span></small></p>
    </div>

    <h3 class="title_post_simple">
        <a href="">The Most Fascinating Show? The Met Trying to Fix Itself</a>
    </h3>

    <p class="resume_post_simple">Etiam eu molestie eros, commodo hendrerit sapien. Nunc pretium tortor felis, eget cursus magna egetnec imperdiet ornare.</p>

    <a href="" class="link_post_simple">Ler Mais</a>
    </article>

    <article class="post_simple f-25">
    <a href="">
        <img src="https://cdn.pixabay.com/photo/2018/01/17/04/14/industry-3087393__340.jpg" alt="">
    </a>

    <div class="info_post_simple">
        <p><small><span class="date_post_simple">11/05/2017</span> | <span class="category_post_simple color-red">SAÚDE</span></small></p>
    </div>

    <h3 class="title_post_simple">
        <a href="">The Most Fascinating Show? The Met Trying to Fix Itself</a>
    </h3>

    <p class="resume_post_simple">Etiam eu molestie eros, commodo hendrerit sapien. Nunc pretium tortor felis, eget cursus magna egetnec imperdiet ornare.</p>

    <a href="" class="link_post_simple">Ler Mais</a>
    </article>

    <article class="post_simple f-25">
    <a href="">
        <img src="https://cdn.pixabay.com/photo/2017/02/02/19/44/seamless-2033661__340.jpg" alt="">
    </a>

    <div class="info_post_simple">
        <p><small><span class="date_post_simple">11/05/2017</span> | <span class="category_post_simple color-red">SAÚDE</span></small></p>
    </div>

    <h3 class="title_post_simple">
        <a href="">The Most Fascinating Show? The Met Trying to Fix Itself</a>
    </h3>

    <p class="resume_post_simple">Etiam eu molestie eros, commodo hendrerit sapien. Nunc pretium tortor felis, eget cursus magna egetnec imperdiet ornare.</p>

    <a href="" class="link_post_simple">Ler Mais</a>
    </article>

    <article class="post_simple f-25">
    <a href="">
        <img src="https://cdn.pixabay.com/photo/2018/03/10/09/45/businessman-3213659__340.jpg" alt="">
    </a>

    <div class="info_post_simple">
        <p><small><span class="date_post_simple">11/05/2017</span> | <span class="category_post_simple color-red">SAÚDE</span></small></p>
    </div>

    <h3 class="title_post_simple">
        <a href="">The Most Fascinating Show? The Met Trying to Fix Itself</a>
    </h3>

    <p class="resume_post_simple">Etiam eu molestie eros, commodo hendrerit sapien. Nunc pretium tortor felis, eget cursus magna egetnec imperdiet ornare.</p>

    <a href="" class="link_post_simple">Ler Mais</a>
    </article>

    <article class="post_simple f-25">
    <a href="">
        <img src="https://cdn.pixabay.com/photo/2018/05/27/15/28/technology-3433708__340.jpg" alt="">
    </a>

    <div class="info_post_simple">
        <p><small><span class="date_post_simple">11/05/2017</span> | <span class="category_post_simple color-red">SAÚDE</span></small></p>
    </div>

    <h3 class="title_post_simple">
        <a href="">The Most Fascinating Show? The Met Trying to Fix Itself</a>
    </h3>

    <p class="resume_post_simple">Etiam eu molestie eros, commodo hendrerit sapien. Nunc pretium tortor felis, eget cursus magna egetnec imperdiet ornare.</p>

    <a href="" class="link_post_simple">Ler Mais</a>
    </article>

    <article class="post_simple f-25">
    <a href="">
        <img src="https://cdn.pixabay.com/photo/2020/02/03/20/49/technology-4816658__340.jpg" alt="">
    </a>

    <div class="info_post_simple">
        <p><small><span class="date_post_simple">11/05/2017</span> | <span class="category_post_simple color-red">SAÚDE</span></small></p>
    </div>

    <h3 class="title_post_simple">
        <a href="">The Most Fascinating Show? The Met Trying to Fix Itself</a>
    </h3>

    <p class="resume_post_simple">Etiam eu molestie eros, commodo hendrerit sapien. Nunc pretium tortor felis, eget cursus magna egetnec imperdiet ornare.</p>

    <a href="" class="link_post_simple">Ler Mais</a>
    </article>

    <article class="post_simple f-25">
    <a href="">
        <img src="https://cdn.pixabay.com/photo/2018/03/10/09/45/businessman-3213659__340.jpg" alt="">
    </a>

    <div class="info_post_simple">
        <p><small><span class="date_post_simple">11/05/2017</span> | <span class="category_post_simple color-red">SAÚDE</span></small></p>
    </div>

    <h3 class="title_post_simple">
        <a href="">The Most Fascinating Show? The Met Trying to Fix Itself</a>
    </h3>

    <p class="resume_post_simple">Etiam eu molestie eros, commodo hendrerit sapien. Nunc pretium tortor felis, eget cursus magna egetnec imperdiet ornare.</p>

    <a href="" class="link_post_simple">Ler Mais</a>
    </article>
     -->
</div>
            
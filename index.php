<?php get_header() ?>
<?php if(have_posts()): while(have_posts()): the_post() ?>
<main>
    <section class="content_page">
        <div class="container">
            <header>
                <h1><?= get_the_title(); ?></h1>
            </header>

            <?= get_the_content(); ?>
            
        </div>
    </section>
</main>
<?php endwhile; endif; ?>
<?php get_footer() ?>

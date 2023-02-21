<?php get_header() ?>
<?php if(have_posts()): while(have_posts()): the_post() ?>
<main>
    <section class="content_page">
        <div class="container">
            <header>
                <h1>404</h1>
            </header>
        </div>
    </section>
</main>
<?php endwhile; endif; ?>
<?php get_footer() ?>

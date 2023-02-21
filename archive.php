<?php get_header() ?>

<main>

    <section class="top_archive_page">
        <div class="container content_top_page">
            <div class="header_archive d-flex">
                <div class="f-50 title_header_archive">
                    <h1><?= get_the_archive_title(); ?></h1>
                </div>
                <div class="f-50 info_header_archive">
                    <p><?= get_the_archive_description() ?> </p>
                </div>
            </div>
        </div>
    </section>

    <section class="content_archive">
        <div class="container d-flex">

            <div class="f-70 list_card_post_hor">
                <?php 
                    if(have_posts()):
                        while(have_posts()):
                            the_post();

                ?>
                <article class="card_post_hor">
                    <div class="info_card_post_hor d-flex">
                        <div class="date_card_post_hor"><small><span><?= get_the_date('j \d\e M \d\e Y'); ?></span> | <strong><?= get_the_category()[0]->name; ?></strong></small></div>

                        <div class=""></div>
                    </div>

                    <div class="title_card_post_hor">
                        <h2><a href="<?=  get_the_permalink(); ?>"><?= get_the_title(); ?></a> </h2>
                    </div>

                    <div class="content_card_post_hor d-flex">
                        <div class="thumb_card_post_hor">
                            <a href="<?=  get_the_permalink(); ?>">
                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_image_alt($id) ?>" title="<?= get_image_alt($id) ?>">
                            </a>
                            
                        </div>

                        <div class="resume_card_post_hor">
                            <p><?= get_the_excerpt(); ?></p>
                        </div>

                    </div>
                </article>

                <?php endwhile; endif; ?>
                
            </div>

            <aside class="f-30 sidebar_post">
                <?php include('sidebar.php') ?>
            </aside>

        </div>
    </section>

</main>

<?php get_footer() ?>
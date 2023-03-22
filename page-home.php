<?php get_header();
//Template Name: Home
$cor_principal_page = get_field('cor_principal_page');

if(!empty($cor_principal_page)):
?>

  <style>
    .header_module h2, .header_sidebar_left h2, .title-section, .category_post_simple, .right_main_content h2{
        color: <?= $cor_principal_page; ?>;
    }
  </style>
<?php endif; ?>

    <main>

        <?php 
        
          //get_template_part('template-parts/content', 'top-categories');
          
        ?>
        
        <section class="section_main">
          <div class="container main_content">
            <div class="left_main_content">

            <header class="header_sidebar_left d-flex">

              <img class="thumb_main_page_home" src="<?= get_the_post_thumbnail_url(null,'thumb-flag-page') ?>" alt="">

              <h2><?= get_cat_name(get_field('categoria_geral_page')); ?></h2>
            </header>
              
            <?= get_field('codigo_do_tempo'); //insere o código do tempo ?>
             
              <?php
                  
                  echo get_post_meta(get_the_ID(), 'sidebar_left', true);

              ?>

              <div class="module">
                <?php get_template_part('template-parts/modules/content', 'module-left1'); ?>
              </div>

            </div>

            <div class="center_main_content">

              <?php get_template_part('template-parts/content', 'center-bloco'); ?>

            </div>

            <div class="right_main_content">
              <?php get_template_part('template-parts/content','sidebar-right') ?>
            </div>
          </div>
        </section>

        <section class="section_two_col">
          <div class="container">
            <?php get_template_part('template-parts/content','hot-posts'); ?>
          </div>
          
        </section>


        <section class="section_modules">
          <div class="container">
            <?php get_template_part('template-parts/content', 'bloco-3'); ?>
          </div>
          
        </section>



        <section class="section_simple">
          
          <div class="container content_section_simple">
            <?php get_template_part('template-parts/content', 'list-post') ?>
          </div>
        </section>

    </main>

<?php get_footer() ?>
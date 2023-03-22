<?php get_header();
//Template Name: Home 3
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
        

      <?php get_template_part('template-parts/modules/content', 'bloco-home2' ); ?>

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
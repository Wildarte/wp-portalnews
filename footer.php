<footer class="footer">
        <div class="container content_footer d-flex">
          <div class="f-25 footer_about footer_col">

            <h3>Sobre</h3>
            <p><?= bloginfo('description'); ?></p>
            
          </div>
          <div class="f-75">
            <header class="header_footer">
              <h2>últimos Posts</h2>
            </header>
            <div class=" d-flex">
              <?php

                $args = [
                  'post_type' => 'post',
                  'posts_per_page' => 3
                ];

                $results_footer = new WP_Query($args);

                if($results_footer->have_posts()):
                  while($results_footer->have_posts()):
                    $results_footer->the_post();

              ?>
              <div class="f-33 footer_col">
                <h3><?= get_the_category()[0]->name == "" ? "Categoria" : get_the_category()[0]->name; ?></h3>

                <div class="footer_list_post">
                  <a href="<?= get_the_permalink(); ?>">
                    <h4><?= get_the_title(); ?></h4>
                  </a>

                </div>
              </div>
              
              <?php endwhile; endif; wp_reset_query() ?>
                    
   
            </div>
          
        </div>
        </div>
        <div class="bottom_footer">
          <div class="container">
            <p>© Copyright 2022 - My Blog. All Rights Reserved</p>
          </div>
          
        </div>
    </footer>
    <!-- 
    <script src="assets/js/script.js"></script>
    -->

    <script>

      let src_logo_normal = '';
      let src_logo_dark = '';
      <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>

      src_logo_normal = '<?=  esc_url( $logo[0] )  ?>';
      src_logo_dark = '<?= get_header_image(); ?>';
      
    </script>
    <?php wp_footer() ?>

</body>
</html>
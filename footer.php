<footer class="footer">
        <div class="container content_footer d-flex">
          <div class="f-25 footer_about footer_col">
            <h3>Sobre</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur iusto tempora ad magni dicta expedita quis perspiciatis pariatur, voluptate soluta voluptatem! Officiis, iusto?</p>
          </div>
          <div class="f-25 footer_col">
            <h3>News</h3>

            <div class="footer_list_post">
              <a href="">
                <h4>Incongruous Jeepers Jellyfish One Far Well Known</h4>
              </a>

              <a href="">
                <h4>Timmediately Quail Was Inverse Much So Remade Dimly Salmon</h4>
              </a>
            </div>
          </div>
          <div class="f-25 footer_col">
            <h3>News</h3>

            <div class="footer_list_post">
              <a href="">
                <h4>Incongruous Jeepers Jellyfish One Far Well Known</h4>
              </a>

              <a href="">
                <h4>Timmediately Quail Was Inverse Much So Remade Dimly Salmon</h4>
              </a>
            </div>
          </div>
          <div class="f-25 footer_col">
            <h3>News</h3>

            <div class="footer_list_post">
              <a href="">
                <h4>Incongruous Jeepers Jellyfish One Far Well Known</h4>
              </a>

              <a href="">
                <h4>Timmediately Quail Was Inverse Much So Remade Dimly Salmon</h4>
              </a>
            </div>
          </div>
          </div>
        </div>
        <div class="bottom_footer">
          <div class="container">
            <p>© Copyright 2022 - My Blog. All Rights Reserved</p>
          </div>
          
        </div>
    </footer>
    <script src="assets/js/script.js"></script>
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
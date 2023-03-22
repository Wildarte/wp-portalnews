<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <?php wp_head() ?>
</head>
<body class="<?php if(isset($_COOKIE['dark_mode']) && $_COOKIE['dark_mode'] == '1'){ echo 'dark_mode'; } ?> <?= $_COOKIE['font_plus'] == '1' ? 'font_plus' : ''; ?>">
  
<div class="over_screen"></div>

  <div class="sidebar_site">

  <?php get_template_part('template-parts/content','sidebar-site'); ?>

  </div>

    <header class="header">
        <div class="container">
            <div class="top_header">
                <div class="mark_marquee">
                  <i class="bi bi-lightning-fill"></i>
                    Últimas
                </div>
                <div class="list_marquee">
                    <ul class="top_content_list">

                    <?php

                        $cat_marquee = get_field('cat_marquee');

                        $args = [
                          'post_type' => 'post',
                          'posts_per_page' => 10,
                          'cat' => $cat_marquee
                        ];
                    
                        $result_cat_marquee = new WP_Query($args);
                    
                        if($result_cat_marquee->have_posts()):
                            while($result_cat_marquee->have_posts()):
                                $result_cat_marquee->the_post();

                    ?>

                        <li>
                          <a class="item_list_marquee" href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
                        </li>
                     
                        <?php endwhile; endif; wp_reset_query(); ?>
                    </ul>
                </div>
            </div>

            <div class="middle_header">
                <div class="left_middle_header">
                    <span class="btn_menu_sidebar">
                        <i class="bi bi-list"></i>
                    </span>

                    <div class="switch_theme <?php if(isset($_COOKIE['dark_mode']) && $_COOKIE['dark_mode'] == '1'){ echo 'switch_dark'; } ?>">
                        <div class="switch_theme_normal">
                          <i class="bi bi-brightness-low"></i>
                        </div>
                        <div class="switch_theme_dark">
                          <i class="bi bi-moon"></i>
                        </div>
                    </div>

                    <div class="control_font d-flex">
                      <div class="btn_font_plus">
                        A +
                      </div>
                      <div class="btn_font_less">
                        A -
                      </div>
                    </div>

                </div>

                <div class="center_middle_header">
                    <a href="<?= home_url(); ?>" class="">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                        //add_query_arg( array( 'something' => 'blabla==' ), 'https://www.google.com' );
                    ?>
                    <img src="<?php if(isset($_COOKIE['dark_mode']) && $_COOKIE['dark_mode'] == '1'){ echo get_header_image(); }else{ echo esc_url( $logo[0] ); }  ?>" alt="logo do site" id="logo_side_header">

                    </a>
                </div>

                <div class="right_middle_right">
                    <ul class="list_social_header">
                      <?php
                          $social_whatsapp = get_option('whatsapp_empresa');
                          $social_facebook = get_option('facebook_empresa');
                          $social_instagram = get_option('instagram_empresa');
                          $social_twitter = get_option('twitter_empresa');
                          $social_youtube = get_option('youtube_empresa');
                          $social_linkedin = get_option('linkedin_empresa');
                          $social_tiktok = get_option('tiktok_empresa');
                      ?>
                        <?= $social_whatsapp != "" ? '<li><a href="https://wa.me/'.$social_whatsapp.'" target="_blank"><i class="bi bi-whatsapp"></i></a></li>' : ''; ?>
                        <?= $social_facebook != "" ? '<li><a href="'.$social_facebook.'" target="_blank"><i class="bi bi-facebook"></i></a></li>' : ''; ?>
                        <?= $social_instagram != "" ? '<li><a href="'.$social_instagram.'" target="_blank"><i class="bi bi-instagram"></i></a></li>' : ''; ?>
                        <?= $social_twitter != "" ? '<li><a href="'.$social_twitter.'" target="_blank"><i class="bi bi-twitter"></i></a></li>' : ''; ?>
                        <?= $social_youtube != "" ? '<li><a href="'.$social_youtube.'" target="_blank"><i class="bi bi-youtube"></i></a></li>' : ''; ?>
                        <?= $social_linkedin != "" ? '<li><a href="'.$social_linkedin.'" target="_blank"><i class="bi bi-linkedin"></i></a></li>' : ''; ?>
                        <?= $social_tiktok != "" ? '<li><a href="'.$social_tiktok.'" target="_blank"><i class="bi bi-tiktok"></i></a></li>' : ''; ?>
                    </ul>
                </div>
            </div>

            <div class="bottom_header">
                <nav class="menu">
                  <?php wp_nav_menu([
                        'menu' => 'Main Menu',
                        'theme_location' => 'my_main_menu',
                        'container' => false
                    ]) ?>
                </nav>

                <div class="location_mobile">
                  <div class="btn_menu_mobile">
                    <strong>MENU</strong>
                    <i class="bi bi-list"></i>
                  </div>
                </div>

            </div>
        </div>
    </header>


    <!-- =========================== palavra do dia ============================================================== -->
        <?php

        if(!is_single()):

            $args = [
              'post_type' => 'post',
              'posts_per_page' => 1,
              'category_name' => 'palavra-do-dia'
            ];

            $result_day_word = new WP_Query($args);

            if($result_day_word->have_posts()):
              while($result_day_word->have_posts()):
                $result_day_word->the_post();

        ?>
    <div class="day_word container">
      <p><span class="icon_day_word"><i class="bi bi-clock"></i></span><strong><?= get_the_date('d/m/Y'); ?></strong> <span class="title_day_word">PALAVRA DO DIA</span> <a id="text_day_word" href="<?= get_the_permalink(); ?>"></a></p>

      <script>

        
        var n = 0;
        var txt = "<?= esc_html(get_the_excerpt()); ?>";
        var speed = 50;

        function typeWriter() {
            if (n < txt.length) {
                document.getElementById("text_day_word").innerHTML += txt.charAt(n);
                n++;
                setTimeout(typeWriter, speed);
            }
        }

        typeWriter();
        

      </script>
    </div>
    <?php endwhile; endif; wp_reset_query(); endif; ?>
    <!-- =========================== palavra do dia ============================================================== -->

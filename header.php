<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- 
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/post.css">
    <link rel="stylesheet" href="assets/css/archive.css">
    <link rel="stylesheet" href="assets/css/author.css">
    -->

    <?php wp_head() ?>
</head>
<body>
  <div class="over_screen"></div>
  <div class="sidebar_site">
    <div class="content_sidebar_site">
      <div class="header_sidebar_site">
        <a href="" class="link_logo_sidebar_site">
          <img src="https://tothetheme.com/newsmonster/wp-content/themes/javapaper/images/logo.png" alt="">
        </a>
        <div class="btn_close_sidebar_site">
          <span><i class="bi bi-caret-left"></i></span>
        </div>
      </div>

      <div class="list_sidebar_site">
        <article class="card_sidebar_site">
          <div class="photo_sidebar_site">
            <img src="https://tothetheme.com/newsmonster/wp-content/uploads/2022/02/avatar_user_1_1645080407-255x255.jpg" alt="">
          </div>

          <div class="info_sidebar_site">
            <h3 class="title_sidebar_site">
              <a href="">Martin Fresno</a>
            </h3>
            <p>This nudged jeepers less dogged sheared oppposite</p>
          </div>
        </article>
        <article class="card_sidebar_site">
          <div class="photo_sidebar_site">
            <img src="https://tothetheme.com/newsmonster/wp-content/uploads/2022/02/avatar_user_1_1645080407-255x255.jpg" alt="">
          </div>

          <div class="info_sidebar_site">
            <h3 class="title_sidebar_site">
              <a href="">Martin Fresno</a>
            </h3>
            <p>This nudged jeepers less dogged sheared oppposite</p>
          </div>
        </article>
      </div>

      <div class="one_sidebar_site">

      </div>
    </div>
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

                        <li> <a class="item_list_marquee" href="https://tothetheme.com/newsmonster/well-incongruous-jeepers-jellyfish-one/"> Incongruous jeepers jellyfish one far Well known </a> </li>
                        <li> <a class="item_list_marquee" href="https://tothetheme.com/newsmonster/this-nudged-jeepers-less-dogged-sheared-opposite-then-around-but-a-due/"> This nudged jeepers while much the less </a> </li>
                        <li> <a class="item_list_marquee" href="https://tothetheme.com/newsmonster/this-nudged-jeepers-less-dogged-sheared-opposite-then-around-but-a-due-2/"> This nudged jeepers ded sesulky oite ten around… </a> </li>
                        <li> <a class="item_list_marquee" href="https://tothetheme.com/newsmonster/timmediately-quail-was-inverse-much-so-remade-dimly-salmon/"> Timmediately quail was inverse much so remade dimly… </a> </li>
                        <li> <a class="item_list_marquee" href="https://tothetheme.com/newsmonster/unanimous-haltered-loud-gnu-resigned-trod-intriguingly-goodness/"> Unanimous haltered loud one trod trigly style four </a> </li>
                     
                    </ul>
                </div>
            </div>

            <div class="middle_header">
                <div class="left_middle_header">
                    <span class="btn_menu_sidebar">
                        <i class="bi bi-list"></i>
                    </span>

                    <div class="switch_theme">
                        <div class="switch_theme_normal">
                          <i class="bi bi-brightness-low"></i>
                        </div>
                        <div class="switch_theme_dark">
                          <i class="bi bi-moon"></i>
                        </div>
                    </div>
                </div>

                <div class="center_middle_header">
                    <a href="" class="">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                        add_query_arg( array( 'something' => 'blabla==' ), 'https://www.google.com' );
                    ?>
                    <img src="<?=  esc_url( $logo[0] )  ?>" alt="logo do site">
                    </a>
                </div>

                <div class="right_middle_right">
                    <ul class="list_social_header">
                        <li><a href=""><i class="bi bi-whatsapp"></i></a></li>
                        <li><a href=""><i class="bi bi-facebook"></i></a></li>
                        <li><a href=""><i class="bi bi-instagram"></i></a></li>
                        <li><a href=""><i class="bi bi-globe"></i></a></li>
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
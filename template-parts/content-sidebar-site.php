<div class="content_sidebar_site">

    <div class="header_sidebar_site">
        <a href="" class="link_logo_sidebar_site">
            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                //add_query_arg( array( 'something' => 'blabla==' ), 'https://www.google.com' );
            ?>
            <img src="<?php if(isset($_COOKIE['dark_mode']) && $_COOKIE['dark_mode'] == '1'){ echo get_header_image(); }else{ echo esc_url( $logo[0] ); }  ?>" alt="" id="logo_sidebar">
        </a>
        <div class="btn_close_sidebar_site">
            <span><i class="bi bi-caret-left"></i></span>
        </div>

    </div>

    <div class="list_sidebar_site">

        <?php

            $args = [
                ''
            ]

        ?>

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
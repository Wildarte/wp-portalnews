<?php get_header();
//Template Name: Home

?>

    <main>

        <?php 
        
          //get_template_part('template-parts/content', 'top-categories');
          
        ?>
        
        <section class="section_main">
          <div class="container main_content">
            <div class="left_main_content">

            <header class="header_sidebar_left d-flex">

              <img class="thumb_main_page_home" src="<?= get_the_post_thumbnail_url(null,'medium') ?>" alt="">

              <h2><?= get_cat_name(get_field('categoria_geral_page')); ?></h2>
            </header>
              
            <?= get_field('codigo_do_tempo'); //insere o código do tempo ?>
             
              <?php
                  
                  echo get_post_meta(get_the_ID(), 'sidebar_left', true);

              ?>

              <div class="module">
                <?php get_template_part('template-parts/modules/content', 'module-left1'); ?>
              </div>

              <!-- ============================================== vou usar apenas um módulo ================================== -->
              <!-- 
              <div class="module">
                <header class="header_module">
                  <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
                </header>
                <section class="content_module">
                  <article class="card_module">
                      <span class="category_module">
                        <a href="">Culture</a>
                      </span>

                      <h3 class="title_module">
                        <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                      </h3>

                      <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                  </article>

                  <article class="card_module">
                    <span class="category_module">
                      <a href="">Culture</a>
                    </span>

                    <h3 class="title_module">
                      <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                    </h3>

                    <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                  </article>

                </section>
              </div>
               -->
              <!-- ============================================== vou usar apenas um módulo ================================== -->

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
            <?php get_template_part('template-parts/content','hot-posts') ?>
          </div>
          
        </section>


        <section class="section_modules">
          <div class="container">
            <header class="header_two_col">
              <div class="content_header_two_col">
                <h2 class="title-section">Acontecimentos Globais</h2>
                <p>Últimas notícias mais quentes</p>
              </div>
              <div class="row_gray"></div>
            </header>
  
            <section class="list_row_modules d-flex">
              <div class="f-25 col_list_row">
                <header class="header_module">
                  <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
                </header>
                <article class="card_module">
                  <span class="category_module">
                    <a href="">Culture</a>
                  </span>
    
                  <h3 class="title_module">
                    <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                  </h3>
    
                  <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                </article>
              </div>
              
              <div class="f-25 col_list_row">
                <header class="header_module">
                  <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
                </header>
                <article class="card_module">
                  <span class="category_module">
                    <a href="">Culture</a>
                  </span>
    
                  <h3 class="title_module">
                    <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                  </h3>
    
                  <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                </article>
              </div>

              <div class="f-25 col_list_row">
                <header class="header_module">
                  <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
                </header>
                <article class="card_module">
                  <span class="category_module">
                    <a href="">Culture</a>
                  </span>
      
                  <h3 class="title_module">
                    <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                  </h3>
      
                  <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                </article>
              </div>

              <div class="f-25 col_list_row">
                <header class="header_module">
                  <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
                </header>
                <article class="card_module">
                  <span class="category_module">
                    <a href="">Culture</a>
                  </span>
        
                  <h3 class="title_module">
                    <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                  </h3>
        
                  <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                </article>
              </div>

            </section>

            <section class="list_row_two d-flex">
              <div class="f-50 list_row_two_col">
                <article class="post_default">
                  <div class="info_post_default">
                    <p><small><span class="info_post_default_date">02/02/2022 </span> | <span class="info_post_default_category">Esporte</span> | por <span class="info_post_default_author">Admin</span></small></p>
                  </div>
                  <h3 class="title_post_default">
                    <a href="">The Best College Football Team You’ve Probably Never Heard Of</a>
                  </h3>

                  <p>Aenean rhoncus gravida nisl vel pretium. Nam ac nisl non ipsum vestibulum vehicula vulputate sagittis magna.</p>

                  <a href="" class="link_post_default"><strong>Ler Mais</strong></a>
                </article>

                <article class="post_default">
                  <div class="info_post_default">
                    <p><small><span class="info_post_default_date">02/02/2022 </span> | <span class="info_post_default_category">Esporte</span> | por <span class="info_post_default_author">Admin</span></small></p>
                  </div>
                  <h3 class="title_post_default">
                    <a href="">The Best College Football Team You’ve Probably Never Heard Of</a>
                  </h3>

                  <p>Aenean rhoncus gravida nisl vel pretium. Nam ac nisl non ipsum vestibulum vehicula vulputate sagittis magna.</p>

                  <a href="" class="link_post_default"><strong>Ler Mais</strong></a>
                </article>

                <article class="post_default">
                  <div class="info_post_default">
                    <p><small><span class="info_post_default_date">02/02/2022 </span> | <span class="info_post_default_category">Esporte</span> | por <span class="info_post_default_author">Admin</span></small></p>
                  </div>
                  <h3 class="title_post_default">
                    <a href="">The Best College Football Team You’ve Probably Never Heard Of</a>
                  </h3>

                  <p>Aenean rhoncus gravida nisl vel pretium. Nam ac nisl non ipsum vestibulum vehicula vulputate sagittis magna.</p>

                  <a href="" class="link_post_default"><strong>Ler Mais</strong></a>
                </article>
              </div>

              <div class="f-25 list_row_two_col">
                <div class="module">
                  <header class="header_module">
                    <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
                  </header>
                  <section class="content_module">
                    <article class="card_module">
                        <span class="category_module">
                          <a href="">Culture</a>
                        </span>
  
                        <h3 class="title_module">
                          <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                        </h3>
  
                        <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                    </article>
  
                    <article class="card_module">
                      <span class="category_module">
                        <a href="">Culture</a>
                      </span>
  
                      <h3 class="title_module">
                        <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                      </h3>
  
                      <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                    </article>
  
                  </section>
                </div>
              </div>

              <div class="f-25 list_row_two_col">
                <div class="module">
                  <header class="header_module">
                    <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
                  </header>
                  <section class="content_module">
                    <article class="card_module">
                        <span class="category_module">
                          <a href="">Culture</a>
                        </span>
  
                        <h3 class="title_module">
                          <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                        </h3>
  
                        <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                    </article>
  
                    <article class="card_module">
                      <span class="category_module">
                        <a href="">Culture</a>
                      </span>
  
                      <h3 class="title_module">
                        <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                      </h3>
  
                      <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                    </article>
  
                  </section>
                </div>
              </div>
            </section>
          </div>
          
        </section>

        <section class="section_three_cols">
          <div class="container d-flex content_section_three_cols">
            
              <article class="card_module f-33">
                <span class="category_module">
                  <a href="">Culture</a>
                </span>
  
                <h3 class="title_module">
                  <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                </h3>
  
                <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
              </article>
            
            
              <article class="card_module f-33">
                <span class="category_module">
                  <a href="">Culture</a>
                </span>
  
                <h3 class="title_module">
                  <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                </h3>
  
                <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
              </article>
            
            
              <article class="card_module f-33">
                <span class="category_module">
                  <a href="">Culture</a>
                </span>
  
                <h3 class="title_module">
                  <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                </h3>
  
                <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
              </article>
            

          </div>
          
        </section>

        <section class="section_main">
          <div class="container main_content main_content_second">
            <div class="left_main_content">

              <div class="module">
                <header class="header_module">
                  <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
                </header>
                <section class="content_module">
                  <article class="card_module">
                      <span class="category_module">
                        <a href="">Culture</a>
                      </span>

                      <h3 class="title_module">
                        <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                      </h3>

                      <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                  </article>

                  <article class="card_module">
                    <span class="category_module">
                      <a href="">Culture</a>
                    </span>

                    <h3 class="title_module">
                      <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                    </h3>

                    <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                  </article>

                </section>
              </div>

              <div class="module">
                <header class="header_module">
                  <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
                </header>
                <section class="content_module">
                  <article class="card_module">
                      <span class="category_module">
                        <a href="">Culture</a>
                      </span>

                      <h3 class="title_module">
                        <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                      </h3>

                      <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                  </article>

                  <article class="card_module">
                    <span class="category_module">
                      <a href="">Culture</a>
                    </span>

                    <h3 class="title_module">
                      <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                    </h3>

                    <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                  </article>

                  <article class="card_module">
                    <span class="category_module">
                      <a href="">Culture</a>
                    </span>

                    <h3 class="title_module">
                      <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                    </h3>

                    <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                  </article>

                  <article class="card_module">
                    <span class="category_module">
                      <a href="">Culture</a>
                    </span>

                    <h3 class="title_module">
                      <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                    </h3>

                    <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                  </article>

                </section>
              </div>
            </div>

            <div class="center_main_content">
              <article class="post_center_top">
                <a href="" class="link_thumb_post_center">
                  <img src="https://cdn.pixabay.com/photo/2017/05/10/19/29/robot-2301646__340.jpg" alt="">
                </a>

                <h2 class="title_post_center_top">
                  <a href="">Iinsect Far Aside And More Therefore Incredibly</a>
                </h2>

                <p>Swankily and that amorally maladroitly oversaw then amidst with and zebra drank from from equal oh zebra up one rhinoceros oh on drolly before knowingly fitting and placidly that some became.</p>

                <div class="author_post_center_top">
                  <p>Por <strong>Admin</strong> / 02/03/2018</p>
                </div>
              </article>

              <section class="section_default">

                <article class="post_default">
                  <div class="info_post_default">
                    <p><small><span class="info_post_default_date">02/02/2022 </span> | <span class="info_post_default_category">Esporte</span> | por <span class="info_post_default_author">Admin</span></small></p>
                  </div>
                  <h3 class="title_post_default">
                    <a href="">The Best College Football Team You’ve Probably Never Heard Of</a>
                  </h3>

                  <p>Aenean rhoncus gravida nisl vel pretium. Nam ac nisl non ipsum vestibulum vehicula vulputate sagittis magna.</p>

                  <a href="" class="link_post_default"><strong>Ler Mais</strong></a>
                </article>

                <article class="post_default">
                  <div class="info_post_default">
                    <p><small><span class="info_post_default_date">02/02/2022 </span> | <span class="info_post_default_category">Esporte</span> | por <span class="info_post_default_author">Admin</span></small></p>
                  </div>
                  <h3 class="title_post_default">
                    <a href="">The Best College Football Team You’ve Probably Never Heard Of</a>
                  </h3>

                  <p>Aenean rhoncus gravida nisl vel pretium. Nam ac nisl non ipsum vestibulum vehicula vulputate sagittis magna.</p>

                  <a href="" class="link_post_default"><strong>Ler Mais</strong></a>
                </article>

                <article class="post_default">
                  <div class="info_post_default">
                    <p><small><span class="info_post_default_date">02/02/2022 </span> | <span class="info_post_default_category">Esporte</span> | por <span class="info_post_default_author">Admin</span></small></p>
                  </div>
                  <h3 class="title_post_default">
                    <a href="">The Best College Football Team You’ve Probably Never Heard Of</a>
                  </h3>

                  <p>Aenean rhoncus gravida nisl vel pretium. Nam ac nisl non ipsum vestibulum vehicula vulputate sagittis magna.</p>

                  <a href="" class="link_post_default"><strong>Ler Mais</strong></a>
                </article>

              </section>

            </div>

            <div class="right_main_content">
              <header class="header_right_content">
                <h2 class="title-section">Feed Diário</h2>
              </header>

              <section class="content_right_content content_module">
                <article class="card_module">
                  <span class="category_module">
                    <a href="">Culture</a>
                  </span>

                  <h3 class="title_module">
                    <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                  </h3>

                  <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                </article>

                <article class="card_module">
                  <span class="category_module">
                    <a href="">Culture</a>
                  </span>

                  <h3 class="title_module">
                    <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                  </h3>

                  <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                </article>

                <article class="card_module">
                  <span class="category_module">
                    <a href="">Culture</a>
                  </span>

                  <h3 class="title_module">
                    <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                  </h3>

                  <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                </article>

                <article class="card_module">
                  <span class="category_module">
                    <a href="">Culture</a>
                  </span>

                  <h3 class="title_module">
                    <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                  </h3>

                  <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                </article>

                <article class="card_module">
                  <span class="category_module">
                    <a href="">Culture</a>
                  </span>

                  <h3 class="title_module">
                    <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                  </h3>

                  <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                </article>

                <article class="card_module">
                  <span class="category_module">
                    <a href="">Culture</a>
                  </span>

                  <h3 class="title_module">
                    <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                  </h3>

                  <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                </article>

              </section>
            </div>
          </div>
        </section>

        <section class="section_quarter">
          <div class="container d-flex">
            <div class="f-25 section_quarter_left">
              <header class="header_module">
                <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
              </header>
              <section class="content_module">
                <article class="card_module">
                    <span class="category_module">
                      <a href="">Culture</a>
                    </span>

                    <h3 class="title_module">
                      <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                    </h3>

                    <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                </article>

                <article class="card_module">
                  <span class="category_module">
                    <a href="">Culture</a>
                  </span>

                  <h3 class="title_module">
                    <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                  </h3>

                  <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                </article>

                <article class="card_module">
                  <span class="category_module">
                    <a href="">Culture</a>
                  </span>

                  <h3 class="title_module">
                    <a href="">Incongruous Jeepers Jellyfish One Far Well Known</a>
                  </h3>

                  <p class="resume_module">Within spread beside the ouch sulky and this wonderfully and as the well and where supply much hyena so tolerantly recast</p>
                </article>

              </section>
            </div>

            <div class="f-75 section_quarter_right">
              <header class="header_module">
                <h2>Modulo 1 <span>SUBTÍTULO</span></h2>
              </header>
              <article class="post_center_top">
                <a href="" class="link_thumb_post_center">
                  <img src="https://cdn.pixabay.com/photo/2017/05/10/19/29/robot-2301646__340.jpg" alt="">
                </a>

                <h2 class="title_post_center_top">
                  <a href="">Iinsect Far Aside And More Therefore Incredibly</a>
                </h2>

                <p>Swankily and that amorally maladroitly oversaw then amidst with and zebra drank from from equal oh zebra up one rhinoceros oh on drolly before knowingly fitting and placidly that some became.</p>

                <div class="author_post_center_top">
                  <p>Por <strong>Admin</strong> / 02/03/2018</p>
                </div>
              </article>

            </div>
          </div>
        </section>


        <section class="section_simple">
          
          <div class="container content_section_simple">
            <?php get_template_part('template-parts/content', 'list-post') ?>
          </div>
        </section>

    </main>

<?php get_footer() ?>
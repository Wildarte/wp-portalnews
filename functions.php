<?php


//carregar scripts e folhas de estilo
function load_scripts(){
    wp_enqueue_script('js-scrit', get_template_directory_uri().'/assets/js/script.js', [], '1.0', true);

    wp_enqueue_style('css-reset', get_template_directory_uri().'/assets/css/reset.css', [], '1.0', 'all');
    wp_enqueue_style('css-style', get_template_directory_uri().'/assets/css/style.css', [], '1.0', 'all');
    wp_enqueue_style('css-post', get_template_directory_uri().'/assets/css/post.css', [], '1.0', 'all');
    wp_enqueue_style('css-archive', get_template_directory_uri().'/assets/css/archive.css', [], '1.0', 'all');
    wp_enqueue_style('css-author', get_template_directory_uri().'/assets/css/author.css', [], '1.0', 'all');

}
add_action('wp_enqueue_scripts', 'load_scripts');

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


//função de configuração do tema
function wpcurso_config(){
    //registrar menu
    register_nav_menus([
        'my_main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu'
    ]);


    //parametros para o cabeçalho do tema
    $args = [
        'height' => 225,
        'width' => 1920
    ];
    add_theme_support('custom-header',$args);//aqui estamos adicionando suporte a cabeçalhos do tema

    add_theme_support('post-thumbnails');

    //para retorna uma thumbnail num post podemos usar a função the_post_thumbnail() e passar como argumento um tamanho que desejarmos como thumb, medium, large ou full etc
    //olha só que massa também podemos passar um array dentro da função the_post_thumbnail([280, 200]) com dois valores que serão interpretados como largura e altura da imagem

    //existe a função add_image_size() que podemos colocar ela no arquivo functions para criar imagens com tamanho já pre-definidos e podemos depois chamar essas imagens chamar essas imagens com a função the_post_thumbnail() e passar como parametro o tamanho de imagens de criamos


    	
    add_theme_support( 'post-formats', ['video', 'image']); //essa linha permite habilitar diferentes formatos de post, ppor exemplo podem existir no tema posts de vídeos, imagens, etc  


    add_theme_support('title-tag'); //adiciona suporte a tag title do site, dessa forma não precisa adicionar ela no seu código fonte basta apenas adicionarmos essa linha e o wordpress se encarrega do resto
}
add_action('after_setup_theme','wpcurso_config',0);

add_action('widgets_init', 'wpcurso_sidebars');
function wpcurso_sidebars(){

    register_sidebar(
        [
            'name' => 'Home Page Sidebar',
            'id' => 'sidebar-1',
            'description' => 'Sidebar to be used on Home Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ]
    );
    register_sidebar(
        [
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-2',
            'description' => 'Sidebar to be used on Blog Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ]
    );

}


?>
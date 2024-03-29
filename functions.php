<?php


//carregar scripts e folhas de estilo
function load_scripts(){
    wp_enqueue_script('js-scrit', get_template_directory_uri().'/assets/js/script.js', [], '1.0', true);

    wp_enqueue_style('css-reset', get_template_directory_uri().'/assets/css/reset.css', [], '1.0', 'all');
    wp_enqueue_style('css-style', get_template_directory_uri().'/assets/css/style.css', [], '1.0', 'all');
    wp_enqueue_style('css-post', get_template_directory_uri().'/assets/css/post.css', [], '1.0', 'all');
    wp_enqueue_style('css-archive', get_template_directory_uri().'/assets/css/archive.css', [], '1.0', 'all');
    wp_enqueue_style('css-author', get_template_directory_uri().'/assets/css/author.css', [], '1.0', 'all');
    wp_enqueue_style('css-pages', get_template_directory_uri().'/assets/css/pages.css', [], '1.0', 'all');

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


    	
    //add_theme_support( 'post-formats', ['chat']); //essa linha permite habilitar diferentes formatos de post, ppor exemplo podem existir no tema posts de vídeos, imagens, etc  


    add_theme_support('title-tag'); //adiciona suporte a tag title do site, dessa forma não precisa adicionar ela no seu código fonte basta apenas adicionarmos essa linha e o wordpress se encarrega do resto

    function get_image_alt($id_page){

        $id_image = get_post_thumbnail_id($id_page);
 
        $alt_text = get_post_meta($id_image, '_wp_attachment_image_alt', true);
 
        return $alt_text;
  
    }
 
}
add_action('after_setup_theme','wpcurso_config',0); 

add_action('widgets_init', 'wpcurso_sidebars');
function wpcurso_sidebars(){

    register_sidebar(
        [
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-blog',
            'description' => 'Sidebar to be used on Blog Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ]
    );

}



//function for count view more popular posts
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


//  FUNCAO DE TESTE TALVEZ EU A EXCLUA
//funcao que atribui um valor para ranking de posts 
function wpb_set_count_post($postID, $val){
    $count_key_post = 'wpb_count_post';
    $contagem = get_post_meta($postID, $count_key_post, true);
    if($contagem == ''){
        delete_post_meta(155, $count_key_post);
        add_post_meta(155, $count_key_post, '1');
        echo "caiu no if"."<br>";
        echo "valor da variavel contagem: ".$contagem;
    }else{
        update_post_meta($postID, $count_key_post, $val);
        echo "nao caiu no if"."<br>";
    }
}


// gerenciamento de logo
function ed_custom_logo() {
    add_theme_support('custom-logo');
    add_theme_support('custom-header', [
        'height' => 120,
        'width' => 500,
        'flex-width' => true,
        'flex-height' => true
    ]);
}
add_action('after_setup_theme', 'ed_custom_logo'); // carrega parametros de suporte do tema



//add custom length to excerpt
function my_excerpt_length($length){
    return 20;
}
add_filter('excerpt_length', 'my_excerpt_length');

//function for custom excerpt read more
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

//============================== tamanho das imagens ====================================
add_image_size('med-center', 570, 450, true); //post center thumb template page home
add_image_size('min-275', 275, 200, true);
add_image_size('medium-380', 380, 190, true);
add_image_size('post-thumb', 844, 420, true);
add_image_size('post-thumb-related-260', 260, 140, true);
add_image_size('post-archive-225', 225, 150, true);
add_image_size('thumb-flag-page', 85, 59, false);
add_image_size('top_home2', 1220, 550, true);
//============================== tamanho das imagens ====================================



include('admin/fields/infoHome.php');

?>
<?php

//fields home
function cmb2_home(){

    /*
    $cmb2_home = new_cmb2_box([
        'id' => 'home',
        'title' => 'embed Sidebar',
        'object_types' => 'page',
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ]
    ]);
    $cmb2_home->add_field([
        'name' => 'Sidebar lado esquerdo',
        'id' => 'sidebar_left',
        'type' => 'textarea_code',
        'attributes' => array(
            'data-codeeditor' => json_encode( array(
                'codemirror' => array(
                    'mode' => 'css',
                ),
            ) ),
        ),

    ]);
    */

    $cmb2_bloco2 = new_cmb2_box([
        'id' => 'home_bloco2',
        'title' => '<h1 style="font-weight: bold; width: 100%">Bloco 2</h1>',
        'object_types' => 'page',
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ]
    ]);
    $cmb2_bloco2->add_field( array(
        'name'           => 'Categoria 1 sidebar esquerda',
        'desc'           => 'Selecione a cetegoria do primeiro bloco da sidebar esquerda',
        'id'             => 'cat_one_sidebar_left',
        'taxonomy'       => 'category', //Enter Taxonomy Slug
        'type'           => 'taxonomy_radio',
        // Optional :
        'text'           => array(
            'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
        ),
        'remove_default' => 'true', // Removes the default metabox provided by WP core.
        // Optionally override the args sent to the WordPress get_terms function.
        'query_args' => array(
            // 'orderby' => 'slug',
            // 'hide_empty' => true,
        ),
    ) );

    $cmb2_bloco2->add_field( array(
        'name'           => 'Categoria 2 sidebar esquerda',
        'desc'           => 'Selecione a cetegoria do segundo bloco da sidebar esquerda',
        'id'             => 'cat_one_sidebar_right',
        'taxonomy'       => 'category', //Enter Taxonomy Slug
        'type'           => 'taxonomy_radio',
        // Optional :
        'text'           => array(
            'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
        ),
        'remove_default' => 'true', // Removes the default metabox provided by WP core.
        // Optionally override the args sent to the WordPress get_terms function.
        'query_args' => array(
            // 'orderby' => 'slug',
            // 'hide_empty' => true,
        ),
    ) );



    //=============================== sidebar direita ===============================================
    $cmb2_sidebar_direita = new_cmb2_box([
        'id' => 'home_sidebar_right',
        'title' => '<h1 style="font-weight: bold; width: 100%">Sidebar Direita</h1>',
        'object_types' => 'page',
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ]
    ]);
    $cmb2_sidebar_direita->add_field( array(
        'name'           => 'Feed Diário',
        'desc'           => 'Selecione a cetegoria para ser listada no feed diário',
        'id'             => 'feed_diario_categoria',
        'taxonomy'       => 'category', //Enter Taxonomy Slug
        'type'           => 'taxonomy_radio',
        // Optional :
        'text'           => array(
            'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
        ),
        'remove_default' => 'true', // Removes the default metabox provided by WP core.
        // Optionally override the args sent to the WordPress get_terms function.
        'query_args' => array(
            // 'orderby' => 'slug',
            // 'hide_empty' => true,
        ),
    ) );
    //=============================== sidebar direita ===============================================





    //==================================================== center post ============================================
    /*
    $cmb2_center = new_cmb2_box([
        'id' => 'center_post',
        'title' => '<h1 style="font-weight: bold; width: 100%">Center Bloco top',
        'object_types' => 'page',
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ]
    ]);
    */
    //==================================================== center post ============================================




    //====================================================== sidebar right ======================================
    $cmb2_hot_post = new_cmb2_box([
        'id' => 'hot_post',
        'title' => '<h1 style="font-weight: bold; width: 100%">Notícias Quentes</h1>',
        'object_types' => 'page',
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ]
    ]);
    $cmb2_hot_post->add_field( array(
        'name'           => 'Módulo esquerdo',
        'desc'           => 'Selecione a categoria do lado esquerdo do bloco',
        'id'             => 'mod_left_hot_post',
        'taxonomy'       => 'category', //Enter Taxonomy Slug
        'type'           => 'taxonomy_radio',
        // Optional :
        'text'           => array(
            'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
        ),
        'remove_default' => 'true', // Removes the default metabox provided by WP core.
        // Optionally override the args sent to the WordPress get_terms function.
        'query_args' => array(
            // 'orderby' => 'slug',
            // 'hide_empty' => true,
        ),
    ) );
    $cmb2_hot_post->add_field( array(
        'name'           => 'Módulo direito',
        'desc'           => 'Selecione a categoria do lado direito do bloco',
        'id'             => 'mod_right_hot_post',
        'taxonomy'       => 'category', //Enter Taxonomy Slug
        'type'           => 'taxonomy_radio',
        // Optional :
        'text'           => array(
            'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
        ),
        'remove_default' => 'true', // Removes the default metabox provided by WP core.
        // Optionally override the args sent to the WordPress get_terms function.
        'query_args' => array(
            // 'orderby' => 'slug',
            // 'hide_empty' => true,
        ),
    ) );
    //====================================================== sidebar right ======================================


}
add_action('cmb2_admin_init', 'cmb2_home');

?>
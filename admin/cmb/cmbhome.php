<?php

//fields home
function cmb2_home(){

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

}
add_action('cmb2_admin_init', 'cmb2_home');

?>
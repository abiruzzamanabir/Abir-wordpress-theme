<?php

// sidebar Register

function abir_widgets_registers(){
    register_sidebar(array(
        'name'=> __('Main Widget Area','abiruzzaman'),
        'id'=> 'sidebar-1',
        'description'=> __('Appears in the sidebar in blog and also other page','abiruzzaman'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name'=> __('footer-1','abiruzzaman'),
        'id'=> 'footer-1',
        'description'=> __('Appears in the sidebar in blog and also other page','abiruzzaman'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name'=> __('footer-2','abiruzzaman'),
        'id'=> 'footer-2',
        'description'=> __('Appears in the sidebar in blog and also other page','abiruzzaman'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name'=> __('footer-3','abiruzzaman'),
        'id'=> 'footer-3',
        'description'=> __('Appears in the sidebar in blog and also other page','abiruzzaman'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name'=> __('footer-4','abiruzzaman'),
        'id'=> 'footer-4',
        'description'=> __('Appears in the sidebar in blog and also other page','abiruzzaman'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init','abir_widgets_registers');
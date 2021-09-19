<?php

function add_theme_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.css', array(), '1.0', 'all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_script( 'jquery',get_template_directory_uri() . '/node_modules/dist/jquery/jquery.js', array( 'jquery' ) );
    wp_enqueue_script( 'bootstrap-js',get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js', array( 'jquery' ) );
    }
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

    add_theme_support( 'post-thumbnails' );

function app_food_adicionando_recursos_ao_tema() {
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'app_food_adicionando_recursos_ao_tema');







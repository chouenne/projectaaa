<?php

function aaa_files()
{
  // Enqueue main stylesheet
  wp_enqueue_style('aaa_main_files', get_stylesheet_uri());

  // Enqueue script for frontend only
  wp_enqueue_script('header-scroll', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'aaa_files');

add_theme_support('custom-logo');

function my_menus()
{
  register_nav_menus(array(
    'header-left' => __('Header Left Menu'),  // For the left side
    'header-right' => __('Header Right Menu'), // For the right side
    'footernav' => __('Footer Nav Menu')
  ));
}
add_action('init', 'my_menus');

function aaa_post_types()
{
  register_post_type(
    'activity',
    array(
      'supports' => array('title', 'editor'),
      'rewrite' => array('slug' => 'activities'),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-users',
      'labels' => array(
        'name' => 'Activities',
        'add_new_item' => 'Add New Activity',
        'edit-item' => 'Edit Activity',
        'all_items' => 'All Activities',
        'singular_name' => 'Activity'
      )
    )
  );

  register_post_type(
    'testimonial',
    array(
      'supports' => array('title', 'editor'),
      'rewrite' => array('slug' => 'testimonials'),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-users',
      'labels' => array(
        'name' => 'Testimonials',
        'add_new_item' => 'Add New Testimonial',
        'edit-item' => 'Edit Testimonial',
        'all_items' => 'All Testimonials',
        'singular_name' => 'Testimonial'
      )
    )
  );
}

add_action('init', 'aaa_post_types');

function register_footer_widgets()
{
  register_sidebar(
    array(
      'name' => __('Footer Column 1', 'project-aaa'),
      'id' => 'footer-1',
      'description' => __('Widgets in this area will be displayed in the first column of the footer.', 'project-aaa'),
      'before_title' => '<h4>', // HTML for widget title
      'after_title' => '</h4>',
    )
  );

  register_sidebar(array(
    'name' => __('Footer Column 2', 'project-aaa'),
    'id' => 'footer-2',
    'description' => __('Widgets in this area will be displayed in the second column of the footer.', 'project-aaa'),
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));

  register_sidebar(array(
    'name' => __('Footer Column 3', 'project-aaa'),
    'id' => 'footer-3',
    'description' => __('Widgets in this area will be displayed in the third column of the footer.', 'project-aaa'),
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
}

add_action('widgets_init', 'register_footer_widgets');


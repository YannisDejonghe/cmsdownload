<?php
# ...



function coffeebreak_setup_scripts() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
    
    wp_enqueue_style( 'fontawesome',get_template_directory_uri() .  '/vendor/fontawesome-free/css/all.min.css' );
    wp_enqueue_style( 'resumetheme-css',get_template_directory_uri() .  '/css/resume.css');

    

	wp_enqueue_script( 'bootstrap-bundle-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '4.0.0', true);
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), '4.0.0', true);
    wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array('jquery', 'jquery-effects-core', 'jquery-ui-core'), '1.4.1', true);
    wp_enqueue_script( 'jquerymin', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), '3.3.1', false );
	wp_enqueue_script( 'resumetheme-js', get_template_directory_uri() . '/js/resume.min.js', array(), '1.0.0', true );
   /* wp_enqueue_script('jquery');*/


}
add_action( 'wp_enqueue_scripts', 'coffeebreak_setup_scripts' );




function themename_custom_logo_setup() {
$defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
);
add_theme_support( 'custom-logo', $defaults );

}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

function your_theme_new_customizer_settings($wp_customize) {
// add a setting for the site logo
$wp_customize->add_setting('banner_image');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'banner_image',
array(
'label' => 'Upload Banner image',
'settings' => 'banner_image',
) ) );
}
add_action('customize_register', 'your_theme_new_customizer_settings');
function register_my_menus_and_sidebar() {
register_nav_menus(
array(
  'header-menu' => __( 'Header Menu' )
 )
);
$args = array(
'name'          => 'Right Sidebar',
'id'            => "right-sidebar",
'description'   => '',
'class'         => '',
'before_widget' => '<div class="abt-2">',
'after_widget'  => "</div>\n",
'before_title'  => '<h3>',
'after_title'   => "</h3>\n",
);
$args2 = array(
'name'          => 'Footer',
'id'            => "footer",
'description'   => '',
'class'         => '',
'before_widget' => '',
'after_widget'  => "",
'before_title'  => '<h3>',
'after_title'   => "</h3>\n",
);
$args3 = array(
    'name'          => 'left Sidebar',
    'id'            => "left-sidebar",
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div class="abt-2">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h3>',
    'after_title'   => "</h3>\n",
    );
register_sidebar( $args );
 register_sidebar($args2);
 register_sidebar($args3);
}
add_action( 'init', 'register_my_menus_and_sidebar' );
add_theme_support( 'post-thumbnails' );

function create_project_post_type() {
    register_post_type( 'project',
        array(
            'labels' => array(
                'name' => __( 'project' ),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'comments'
            ),
            'rewrite' => array('slug' => 'project'),
        ));
    }
    add_action( 'init', 'create_project_post_type' );


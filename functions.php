<?php

function load_css()
{
    wp_register_style("bootstrap",  get_template_directory_uri() . "/css/bootstrap.min.css", array(), false, "all");
    wp_enqueue_style("bootstrap");
    wp_register_style("styles",  get_template_directory_uri() . "/style.css", array(), false, "all");
    wp_enqueue_style("styles");
 
}

add_action("wp_enqueue_scripts", "load_css");



function sidebar_widgets_init() {
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar',),
		'id'            => 'default-sidebar',
		'description'   => esc_html__( 'Add widgets here.',  ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name' => 'Footer Sidebar 1',
		'id' => 'footer-sidebar-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'sidebar_widgets_init' );



function admin_scripts() {

}

function load_js()
{

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_register_script("bootstrap",  get_template_directory_uri() . "/js/bootstrap.min.js", "jquery", false, true);
     wp_enqueue_script("bootstrap");   

    wp_register_script("mainJs",  get_template_directory_uri() . "/main.js", array(), false, "all");
    wp_enqueue_script("mainJs");

    wp_register_script("slider",  get_template_directory_uri() . "/slick/slick.js", array("jquery"), false, true);
    wp_enqueue_script("slider");

	
 }
add_action("wp_enqueue_scripts", "load_js");

register_nav_menus(
	array(
		"top-menu" => __("Top Menu", "theme"),
		"footer-menu" => __("Footer Menu", "theme")
)
);
	add_action( 'admin_enqueue_scripts', 'admin_scripts' );
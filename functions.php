<?php
/**
 * Configuracion de Menu 
**/
function Orozco_wp_nav_menu_args( $args = '' ) {
	$args = array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'collapse navbar-collapse',
		'container_id'    => 'bs-example-navbar-collapse-2',
		'menu_class'      => 'nav navbar-nav',
		'menu_id'         => '',
		'echo'            => false,
		'fallback_cb'     => '',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s </ul>',
		'depth'           => 0,
		'walker'          => ''
	);
	return $args;
}
add_filter( 'wp_nav_menu_args', 'Orozco_wp_nav_menu_args' );
/******************************************************************************/

/**
 * Nombre de los menu 
 **/
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );
/******************************************************************************/

/**
 * Proper way to enqueue scripts and styles
 */
function wpb_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');
/*
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Content Block',  
			'block' => 'span',  
			'classes' => 'content-block',
			'wrapper' => true,
			
		),  
		array(  
			'title' => 'Blue Button',  
			'block' => 'span',  
			'classes' => 'blue-button',
			'wrapper' => true,
		),
		array(  
			'title' => 'Red Button',  
			'block' => 'span',  
			'classes' => 'red-button',
			'wrapper' => true,
		),
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 

add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 
function my_theme_add_editor_styles() {
    add_editor_style(get_bloginfo("stylesheet_directory").'/public/css/ccsadd.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name'=>'sidebar',
		'before_widget' => '<div id="%1$s" class="side %2$s">', // Removes <li>
		'after_widget' => '</div>', // Removes </li>
	));



if ( has_nav_menu('extra-menu') ) {

	wp_nav_menu(
		array(
			'theme_location'  => 'extra-menu',
			'container'       => 'div',
			'container_id'    => 'menu-social',
			'container_class' => 'menu',
			'menu_id'         => 'menu-social-items',
			'menu_class'      => 'menu-items',
			'depth'           => 1,
			'link_before'     => '<span class="screen-reader-text">',
			'link_after'      => '</span>',
			'fallback_cb'     => '',
		)
	);

} 
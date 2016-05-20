<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );



//=====================================//
//--- Inhabitent: Custom Functions ---//
//===================================//

//Customize WP Login Screen
function inhabitent_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href=" ' .
	get_bloginfo('stylesheet_directory') . '/build/css/customlogin.css" />';
	}

	add_action ('login_head', 'inhabitent_custom_login');

//Change Link of Logo on Login Screen
//The function below is an easier/simpler way than the one on Codex for login_head,
//although you can use that too.

function inhabitent_login_link( $url ){
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_link' );

//Change Logo Title on Login Screen
function inhabitent_logo_title () {
	return 'View Site';
}

add_filter ('login_headertitle', 'inhabitent_logo_title');

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_init', 'inhabitent_remove_submenus', 102 );

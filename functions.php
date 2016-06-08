<?php
/*
Theme Name: Bad Jimmy's
Theme URI: http://wordpress.org/themes/badjimmys
Author: Brianna Karle
Author URI: http://www.briannakarle.com
Description: The Bad Jimmy's Theme is the 2016 theme for Bad Jimmy's Brewing Co.
Version: 1.0
License: Apache License, Version 2.0
License URI: http://www.apache.org/licenses/LICENSE-2.0
Tags: black, brown, red, white, yellow, wood, metal, brewery, one-column, two-columns, right-sidebar, flexible-width, custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, translation-ready
Text Domain: badjimmys
*/

//register menu
register_nav_menus(array(
'main-menu' => _( 'Main' ),
));
//


//register sidebars
register_sidebars();
//

//make thumbnails *Featured Image*
add_theme_support('post-thumbnails');
//


//add excerpts to pages
add_post_type_support('page', 'excerpt');
//


//subnavigation

function my_subnavigation() {
	
	global $post;
	
	if (is_page()) {
			
			if ($post->post_parent) { //the page we're on has a parent
				echo '<h2> ' . get_the_title($post->post_parent) . '<h2>'; //title
				echo '<ul>';
			
				echo wp_list_pages (array('title_li' => '', 'child_of' => $post->post_parent,)); //list children of parent of post
				echo '</ul';
				
			} else { //if page has no parent
				echo '<h2>' . get_the_title($post->ID) . '</h2>';
				echo '<ul>';
				
				echo wp_list_pages (array('title_li' => '', 'child_of' => $post->ID, )); //list pages that are children of this post
				
				echo '</ul>';
			}
			
			}
			
			if(! (is_page())) { //if it isn't a page
				echo '<h2>News</h2>';  //echo "Blog" as title
				echo '<ul>';
				
				wp_list_categories(array('title_li' => '',)); //list categories of blog
				
				echo '</ul>';
			
			}
}
//END subnavigation
		
		
// Title Tag

function get_my_title_tag() {
	global $post;
	
	if (is_front_page()) { //if front page
	
		bloginfo('description'); //site tagline
		
	} elseif (is_page() || is_single()){ //if on a page or posting
		
	    the_title(); //get the page or post title	
	} else { //for everything else
	    bloginfo('description');	 //get site's tagline
	}
	
	if ($post->post_parent) { //if a destination page
		echo ' | ';
		echo get_the_title($post->post_parent); //get the title of the parent page
		
	}
	echo ' | ';
	bloginfo('name'); //name of site
	echo ' | ';
	echo 'Seattle, WA'; //location of company
	
}
//END Title Tag
?>
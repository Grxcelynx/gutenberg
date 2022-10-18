<?php
/**
 * Plugin Name:      Grxcelyn's Block Patterns
 * Plugin URI:       https://casabona.org
 * Description:      This is a simple plugin with some common block patterns I'm using. 
 * Version:           1.0.0
 * Author:            Grace Birnam
 * Author URI:     https:/grxcelyn.com
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


//  !!!!!!! READ ME BELOW !!!!!!


// THIS FUNCTION CREATES THE CATEGORY FOR YOU TO SEE YOUR PATTERNS IN THE PATTERNS SECTION OF THE DASHBAORD WHEN USING YOUR CUSTOM MADE BLOCKS
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

function block_patterns() {
	register_block_pattern_category(
		'Nicepage',
		array(
			'label'		=> __( 'Nicepage', 'patterns' )
		)
	);


	// YOU MUST USE THIS ENTIRE FUNCTION ANY TIME YOU WANT TO ADD A NEW PATTERN
	// YOU WILL COPY AND PASTE THIS AND THEN ONLY REPLACE THE CONTENT SECTION WITH YOUR NEW JSON ESCAPED CODE

	register_block_pattern(
		'patterns/testimonials',
		array(
			'title'       => __( 'Testimonials', 'patterns' ),
			
			'description' => _x( 'A simple set of blocks to encourage people to join the membership', 'thesetup-practice01' ),
			
			'content'     => "<!-- wp:heading -->\n<h2>Main Title</h2>\n<!-- /wp:heading -->\n\n<!-- wp:image -->\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph {\"align\":\"center\"} -->\n<p class=\"has-text-align-center\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam libero erat, consectetur nec elit sit amet, accumsan posuere lorem. Fusce tincidunt ante eget aliquet auctor. Nam at maximus nulla, non blandit tellus. Sed ut vestibulum lacus. Mauris et elit urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vivamus vehicula tempus dictum. Proin efficitur orci et facilisis ullamcorper. Suspendisse accumsan, dolor in placerat lobortis, orci nisl suscipit dolor, nec molestie neque libero ac quam. Cras interdum felis sapien, eu aliquet mi imperdiet aliquet. Ut porta in velit ultrices posuere. Vivamus finibus pellentesque velit, in consectetur justo.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam libero erat, consectetur nec elit sit amet, accumsan posuere lorem.</p><cite>Lorem ipsum</cite></blockquote>\n<!-- /wp:quote -->",
			
			'categories'  => array( 'Nicepage' ),
		)
	);

}    

// YOU NEED THIS SO EVERYTHING REGISTERS

add_action( 'init', 'block_patterns' );

?>








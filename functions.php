<?php


// Custom template tags for this theme.
// require get_template_directory() . '/inc/template-tags.php';


// Facebook Open Graph settings
 
// og:type
function og_type() {
	if (is_home() || is_page() || is_search()){
		echo "website";
	}else{
		echo "article";
	}
}
 
// og:url
function og_url() {
	if (is_home()) {
		echo esc_url( home_url( '/' ) );
	}else{
		echo get_permalink($post->ID);
	}
}
 
// og:image
function og_image() {
	if (is_home() || is_page()) {
		bloginfo('template_url');echo '/images/facebook-share.jpg';
	}else{
		if (has_post_thumbnail()) {
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			echo $url;
		}else{
			bloginfo('template_url');echo '/images/facebook-share.jpg';
		}
	}
}

?>
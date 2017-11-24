<?php
/*
Plugin Name: Wordpress Sites Listing
*/
function multisites($args) {
    $data = '';
    foreach(get_sites() as $site) {
    	$blog_id = $site->blog_id;
        $data = $data . json_encode(get_blog_details($blog_id));
        $data = $data . '<br>';
        $data = $data . get_site_icon_url(512, '', $blog_id);
        $data = $data . '<br>';
        $data = $data . '<hr>';
    }
    return $data;
}
add_shortcode( 'multisites', 'multisites' );
?>

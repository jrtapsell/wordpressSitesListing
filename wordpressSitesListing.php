<?php
/*
Plugin Name: Wordpress Sites Listing
*/
function multisites($args) {
    $data = '';
    foreach(get_sites() as $site) {
    	$blog_id = $site->blog_id;

    	$site_icon = get_site_icon_url(64, '', $blog_id);
    	$blog_details = get_blog_details($blog_id);
    	$url = $blog_details->siteurl;
    	$blog_name = $blog_details->blogname;


        $data = $data . '<a href="'.$url.'"><img src="' . $url . '"/>'.$blog_name.'</a><br>'
    }
    return $data;
}
add_shortcode( 'multisites', 'multisites' );
?>

<?php
/*
Plugin Name: Wordpress Sites Listing
*/
function multisites($args) {
    $data = '';
    foreach(get_sites() as $site) {
        $data = $data . json_encode(get_blog_details($site->blog_id));
        $data = $data . '<br>';
    }
    return $data;
}
add_shortcode( 'multisites', 'multisites' );
?>

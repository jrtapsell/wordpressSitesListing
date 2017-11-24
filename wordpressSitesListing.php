<?php
/*
Plugin Name: Wordpress Sites Listing
*/
function multisites($args) {
    return json_encode(get_sites());
}
add_shortcode( 'multisites', 'multisites' );
?>

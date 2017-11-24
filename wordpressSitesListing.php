<?php
/*
Plugin Name: Wordpress Sites Listing
*/
function multisites($args) {
    $data = '';
    foreach(get_sites() as $site) {
        $data = $data . json_encode($site);
        $data = $data . '<br>';
    }
    return $data;
}
add_shortcode( 'multisites', 'multisites' );
?>

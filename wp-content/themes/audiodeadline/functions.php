<?php

//remove_filter( 'the_content', 'wpautop' );
//remove_filter( 'the_excerpt', 'wpautop' );
//remove_filter( 'comment_text', 'wpautop', 30 );

add_filter('tiny_mce_before_init', 'myextensionTinyMCE' );

function myextensionTinyMCE($init) {
    // Command separated string of extended elements
    $ext = 'span[class|style],h1[class|style],h2,h3,hr,ul[class],ol[class],li[class],div[class|id|style|link],meta';

    // Add to extended_valid_elements if it alreay exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // Super important: return $init!
    return $init;
}



       /* $args = array(
            'post_type' => array('form'),
            'meta_key' => 'zip_code',
            'meta_value' => get_post_meta(get_the_ID(), "zip_code", true),
            'posts_per_page' => 8,
            'fields' => 'ids'
        );
        $related = get_posts($args);

        print_r($related);*/


?>

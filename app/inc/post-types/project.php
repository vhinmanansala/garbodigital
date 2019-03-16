<?php 

add_action( 'init', function() {
    register_extended_post_type('project',array(
        'supports' => array('excerpt', 'editor', 'thumbnail', 'title')
    ));
});
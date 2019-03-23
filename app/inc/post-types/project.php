<?php 

add_action( 'init', function() {
    register_extended_post_type('project',array(
        'show_in_rest' => true,
        'supports' => array('excerpt', 'editor', 'thumbnail', 'title')
    ));
    register_extended_taxonomy( 'project_type', 'project' );
});
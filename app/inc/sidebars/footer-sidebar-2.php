<?php

register_sidebar(array(
    'name'          => __( 'Footer Sidebar 2 '),
    'id'            => 'footer_sidebar_2',
    'before_widget' => '<div class="sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title"><span>',
    'after_title'   => '</span></h4>',
));
<?php
/**
* Template Name: Homepage
*/

get_header();
get_template_part( 'template-parts/content', 'social-links' );
    //first section
    get_template_part( 'template-parts/homepage/content', 'first-section' );
    //second section
    get_template_part( 'template-parts/homepage/content', 'second-section' );
    //third section
    get_template_part( 'template-parts/homepage/content', 'third-section' );
    //fourth section 
    get_template_part( 'template-parts/homepage/content', 'fourth-section' );
get_footer();

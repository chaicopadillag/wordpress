<?php
get_header();
// get_header('secundary');
#include TEMPLATEPATH . '/content.php';

get_template_part('content');

get_sidebar();
get_footer();

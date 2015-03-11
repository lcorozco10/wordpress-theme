<?php get_header();
$d = new iniData();

the_post();
echo the_title()."<br>";
echo the_content(__('Read more'))."<br>";


get_footer(); 
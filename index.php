<?php 
get_header();
$d = new iniData();

$pageContent = "";

while (have_posts()) :
	the_post();
	if (!is_page()) :
		$page = "<div class = 'post-class col-xs-12 col-sm-4 ".get_the_ID()."' >".
		"<span class='title-post'>".get_the_title()."</span>".
		"<p>".get_the_content()."</p></div>";

	else:
		$page = "<div class = 'post-class col-xs-12 col-sm-4><p>".get_the_title()."</p>".
		"<p>".get_the_content(__('Read more'))."</p></div>";
	endif;
	$pageContent .= $page;
endwhile;


$field = array(
		"{contentBody}",
		"{title}",				
	);
$remplaceField = array(
		$pageContent,
		get_bloginfo('name')
		
	);


$bodyContent = file_get_contents($d::$themeDir."/public/index.html");
$bodyContent = str_replace($field, $remplaceField, $bodyContent);

echo $bodyContent;
include(TEMPLATEPATH."/sidebar.php");
get_search_form();
get_footer();
?>


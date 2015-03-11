<?php 

include(TEMPLATEPATH."/inc/InitData.php");
$d = new iniData();


if(wp_title('', false)) {
	$title = get_the_title(); 
	$title .= ' :'; 
}

$title .= get_bloginfo('name');
$bodyClass = get_body_class()[0].' '. get_body_class()[1].' '.get_body_class()[2].' '.get_body_class()[3].' '.get_body_class()[4].' '.get_body_class()[5];


$headerContent = file_get_contents($d::$themeDir."/public/header.html");

$field = array(
		"{lang}",
		"{html_type}",
		"{charset}",
		"{cs-1}",
		"{cs-2}",
		"{siteTitle}",
		"{titlePegeLocation}",		
		"{homeUrl}",
		"{siteDescription}",
		"{bodyclass}",
		"{nemu}"
	);
$remplaceField = array(
		get_bloginfo('language'),
		get_bloginfo('html_type'),
		get_bloginfo('charset'),
		$d::$cssStyle,
		$d::$cssDir."/ccsadd.css",		
		get_bloginfo('name'),
		$title,
		get_bloginfo('home'),
		get_bloginfo('description'),
		$bodyClass,
		wp_nav_menu()
	);

$headerContent = str_replace($field, $remplaceField, $headerContent);


//add header script and css
wp_head();
echo $headerContent;

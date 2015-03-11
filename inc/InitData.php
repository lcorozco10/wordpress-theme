<?php
/**
* Contiene variables del sistema
*/
class iniData
{
	static public $themeDir;
	static public $cssStyle;	
	static public $jsDir;
	static public $cssDir;

	function __construct()
	{

		$this::$themeDir  = get_bloginfo("stylesheet_directory");
		$this::$cssStyle  = get_bloginfo("stylesheet_url");
		
		//Js and Css  resources directory.
		$this::$jsDir = $this::$themeDir."/public/js";
		$this::$cssDir = $this::$themeDir."/public/css";
		
		
	}
}
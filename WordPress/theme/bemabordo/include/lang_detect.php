<?php
 if(function_exists('pll_current_language')) {
	//var_dump(pll_current_language());
	$lang=pll_current_language();
 }else{
	if(!isset($_GET["lang"])){
		$_GET["lang"] = "pt";
	}
	$lang=$_GET["lang"];
 }
?>
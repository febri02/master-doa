<?php
include './app/libraries/general.php';
session_start();
if (!empty($_SESSION)){
	
	$link = base_url()."app/media.php?module=home";
	redirect($link);	
	exit();	
}
else{
	
	$link = base_url()."app/auth.php?module=login";
	redirect($link);	
	exit();	
}
?>
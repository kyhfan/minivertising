<?php
	include_once("_header.php");
//$categories = get_the_category();
//print_r($categories->name);
if ( in_category( 'news' )) {
	include('single-news.php');
}else{
	include('single-work.php');
}
?>


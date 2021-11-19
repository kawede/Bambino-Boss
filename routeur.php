<?php

$url='';
if(isset($_GET['url']))
{
	$url=explode('/', $_GET['url']);
}


if($url== '')
{
	require 'mains/home.php';
}
elseif ($url[0] == 'shop-details') {
	require 'shop-details.php';	
}
elseif ($url[0]== 'blog-details') {
	require 'mains/blog-details.php';	
}
elseif ($url[0]== 'Blog') {
	require 'Blog.php';	
}
elseif ($url[0]== 'about') {
	require'about.php';	
}
elseif ($url[0]== 'sendemail') {
	require 'pages/sendemail.php';	
}
	elseif ($url[0]== 'collection_products') {
	require 'pages/collection_products.php';	
}
elseif ($url[0]== 'baby_lotion') {
require 'baby_lotion.php';	
}
elseif ($url[0]== 'savons') {
require 'savons.php';	
}
elseif ($url[0]== 'Berceaux') {
require 'Berceaux.php';	
}
elseif ($url[0]== '_sendMessage') {
require 'pages/_sendMessage.php';	
}
elseif ($url[0]== 'actiontraintement') {
require 'mains/actiontraintement.php';	
}
elseif ($url[0]== 'Pconfidentialite') {
	require 'mains/Pconfidentialite.php';	
	}
else
{
	require 'mains/404.php';
}

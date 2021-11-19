<?php

$url='';
if(isset($_GET['url']))
{
	$url=explode('/', $_GET['url']);
}

if($url== '')
{
	require '_login.php';
}
elseif ($url[0]== 'collection_salles') 
{
	require 'mains_pages/collection_salles.php';
}
elseif ($url[0]== 'collection_decorateur') 
{
	require 'mains_pages/collection_decorateur.php';
}

else
{
	require '404.php';
}

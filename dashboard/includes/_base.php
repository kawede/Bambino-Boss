<?php
session_start();
try {  
	$db = new PDO("mysql:host=localhost;dbname=bambino_boss","kawede@1","180012@#%&Ab");
} catch(Exception $e) {
	exit('impossible to find a connexion');
}
?>
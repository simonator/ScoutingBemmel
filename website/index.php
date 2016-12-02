<?php
	//define ROOTPATH as website root
	define('ROOTPATH', __DIR__);
	define('HOST', $_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['PHP_SELF']),'/\\'));

	//go to lander.php
	require ROOTPATH.'/content/lander.php';
?>

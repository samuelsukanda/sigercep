<?php
	if (!empty($_SERVER['HTTPS']) && ('off' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/sigercep/app/');
	exit;
?>
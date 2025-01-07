<?php
	require_once __DIR__ . '/conf/config.php';

	session_unset();
	session_destroy();

	header('Location: /');
?>
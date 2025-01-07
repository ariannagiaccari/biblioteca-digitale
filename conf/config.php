<?php
	session_start();

	$_SESSION['logged_in'] = $_SESSION['logged_in'] ?? false;

	// $_SESSION['logged_in'] = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : false;
?>
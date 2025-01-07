<?php
	$metaTitle = $metaTitle ?? '';
	$metaTitle = array(
		$metaTitle,
		'Biblioteca Digitale'
	);
	$metaTitle = array_filter($metaTitle);
	$metaTitle = implode(' | ', $metaTitle);
?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?= $metaTitle ?></title>
<link rel="stylesheet" href="styles\style.css" />

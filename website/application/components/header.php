<?php
	$title = PROJECT["NAME"];

	if (!empty($page_name))
	{
		$title .= " — $page_name";
	}
?>

<meta charset="utf-8">
<meta name="csrf-token" content="<?= $_SESSION["csrf"] ?>">
<title><?= $title ?></title>
<link rel="shortcut icon" type="image/png" href="<?= get_server_host() ?>/html/img/logos/icon.png">

<link rel="stylesheet" href="<?= get_server_host() ?>/html/css/site.min.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?= get_server_host() ?>/html/css/print.min.css" type="text/css" media="only screen and (max-device-width: 480px)">
<link rel="stylesheet" href="<?= get_server_host() ?>/html/css/mobile.min.css" type="text/css" media="print">
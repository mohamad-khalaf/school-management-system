<?php
    // this file to handle the langs 
    if (session_status() === PHP_SESSION_NONE) session_start();

    if (isset($_GET['lang'])) $_SESSION['lang'] = $_GET['lang'];

	$_SESSION['lang'] = $_SESSION['lang'] ?? 'ar';

	// $_SESSION['lang'] = $_GET['lang'] ?? $_SESSION['lang'];

    $lang = $_SESSION['lang'];

    $dir = $lang == 'ar' ?  "rtl" :  "ltr" ;

    include("./includes/lang/{$_SESSION['lang']}.php");
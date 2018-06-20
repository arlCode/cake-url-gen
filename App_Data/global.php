<?php

require_once("time.php");
// session_start();

$timeChangeClass = new TimeClockController();

if(!$timeChangeClass->checkUrlForTime()) {


    date_default_timezone_set('America/New_York');
    $GLOBALS['start_date'] = date('m/d/Y'); // Adjusted for EST
    $GLOBALS['end_date'] = date('m/d/Y');
}

// echo $timeChangeClass->checkUrlForTime();

// Changes the global date depending on the parameters.

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>


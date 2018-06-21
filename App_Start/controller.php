<?php

require("functions.php");

$api = new apiModel();

$api->getAPIResponse();


$jordanCake = $api->createArray(null, "data", "campaign", "cake", 3);
?>



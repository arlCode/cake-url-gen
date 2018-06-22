<?php

require("functions.php");

$api = new DataController();

$api->getAPIResponse(); // Get the API Response call


$jordanCake = $api->createArray(null, "data", "campaign", "cake", 3); // Creates an Array out of JSON to parse data.


// Create PHP call to DB to grab the Campaign ID and Offer ID


?>



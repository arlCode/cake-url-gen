<?php

require("functions.php");

$dataController = new DataController();

$dataController->getAPIResponse(); // Get the API Response call


$jordanCake = $dataController->createArray(null, "data", "campaign", "cake", 3); // Creates an Array out of JSON to parse data.


// Create PHP call to DB to grab the Campaign ID and Offer ID


?>



<?php

// echo "requesting functions.php page.";

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


if(!empty($_GET['lander-url'])) {
    $post_data = $dataController->sqlInput($_GET['lander-title'], $_GET['lander-url']);

}


if(!empty($_GET['lander-name'])) {
    $post_data = $dataController->sqlOutputWhere("lander_url", "landers", $_GET['lander-name']);


    // print_r($post_data);
}

// $dataController->sqlOutput("lander_url", "landers", $_GET['data']);

// print_r($_GET);
//TODO: Insert into DB from JSON.


?>
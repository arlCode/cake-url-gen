<?php

// echo "requesting functions.php page.";

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


if(!empty($_GET)) {
    $post_data = $dataController->sqlInput($_GET['lander-title'], $_GET['lander-url']);

}



//TODO: Insert into DB from JSON.


?>
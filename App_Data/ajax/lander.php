<?php

// echo "requesting functions.php page.";




$post_data = $dataController->sqlInput("Direct Input", "https://lander-test.com");

//TODO: Insert into DB from JSON.

print_r($post_data);
?>
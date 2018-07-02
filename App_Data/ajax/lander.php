<?php

require('../localdb.php');

$post_data = json_encode(
    array('lander_title' => $_POST['lander-title'],
    'lander_url' => $_POST['lander-url'])
);

echo $post_data;
?>
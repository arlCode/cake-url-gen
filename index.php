<!DOCTYPE html>

<html>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
            crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <?php require('./app_start/controller.php'); ?>

    <body>

        <!-- Navigation Placeholder -->

        <main role="main" id="main" class="container">

            <div class="container">
                <div class="row">
                    <div class="col-md-11">
                        <button type="button" data-toggle="modal" data-target="#new-lander-modal" class="btn btn-success float-right">Upload New Lander</button>
                    </div>
                </div>
            </div>

            <?php require('./modal.php'); ?>

            <div class="flex-container">
                <div class="row">
                    <div class="col-4">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Select Traffic Source
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php foreach($api->sqlOutput("traffic_source", "user") as $tSource) { ?>

                                <a class="dropdown-item traffic-source" href="#"><?php echo $tSource  ?></a>

                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Select Campaign
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php
                                foreach($jordanCake as $campaign) { ?> <!-- API Call -->

                                    <a class="dropdown-item campaign" href="#"><?php echo $campaign["offer_name"]; ?></a>

                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Select Landing Page
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php
                                foreach($api->sqlOutput("lander_title", "landers") as $landerTitle) { ?>

                                    <a class="dropdown-item lander" href="#">
                                        <?php echo $landerTitle; ?>  
                                    </a>

                                    <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-container">
                <div class="col-8">
                    <div class="row">
                        <div class="input-group mb-3">
                            <input type="text" id="url-output" class="form-control" disabled>
                            <div class="input-group-append">
                                <button class="btn btn-outline-success" type="button">Copy</button>
                            </div>
                        </div>

                        <img id="thumbnail-display" class="img-fluid img-thumbnail" />  <!-- Image responsive dynamic lander thumbnails. -->
                    </div>
                </div>
            </div>
        </main>
        <footer>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
            crossorigin="anonymous"></script>
        <script src="./js/dataHandling.js"></script>
        <script src="./js/eventHandling.js"></script>
        <script src="./js/stackoverflow.js"></script>
        <!-- Because I don't have all the answers. -->
    </body>

</html>
<?php

class TimeClockController {

    public function checkUrlForTime() { // Checks URL for POST inputs
        
        $timeChangeRequested = false;


        if(!empty($_GET['start_date']) && !empty($_GET['end_date'])) { // Check if the user inputted a time change request via POST/GET

            $GLOBALS['start_date'] = $_GET['start_date']; // Adjusted for PST
            $GLOBALS['end_date'] = $_GET['end_date'];
            $timeChangeRequested = true;

            

        } elseif(!empty($_GET['start_date']) && empty($_GET['end_date'])) {

            $GLOBALS['start_date'] = $_GET['start_date'];
            $GLOBALS['end_date'] = date('m/d/Y');
            $timeChangeRequested = true;

        }  elseif(empty($_GET['start_date']) && !empty($_GET['end_date'])) {

            $GLOBALS['start_date'] = date('m/d/Y'); // Adjusted for EST
            $GLOBALS['end_date'] = $_GET['end_date'];
            
            $timeChangeRequested = true;

        }  else {

            $timeChangeRequested = false;

        }

        return $timeChangeRequested;
    }

}

?>
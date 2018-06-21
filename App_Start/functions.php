<?php

require("../app_data/localdb.php");


// Methods for the API parsing.


class apiModel {

    public function getAPIResponse() {
        $source = new api;

        $response = $source->cake($GLOBALS['start_date'], $GLOBALS['end_date'], 3);
        
        return $response;
    }

    // public function createArray($grandparent, $parent, $child, $apiToPull, $affiliate_id) { // JSON Array Generator
        
    //     $json = $this->getAPIResponse($apiToPull, $affiliate_id);// Grabs the API information
    //     $arr = array(); // Empty Array to populate

    //     // echo "parent: " . var_dump($json[$parent][1]["sub_id"]); // <--- This is how you push out the JSON Array.
    //     if(isset($grandparent)){
            
    //         foreach($json->$grandparent as $item) { // Loop through every item needed from cake
                
    //             array_push($arr, $item->$child); // Create an array
    //         }

    //         return $arr;
    //     }

    //     if(!isset($grandparent)) {

    //         foreach($json[$parent] as $item) { // Loop through every item needed from cake

    //             array_push($arr, $item); // Create an array

    //         }
            
    //         return $arr;
    //     }
    // }

}
?>



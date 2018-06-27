<?php

require("app_data/localdb.php");

// Varying methods for controller API and DB controls.
class DataController {

    public function getAPIResponse() {
        $source = new api;

        $response = $source->cake($GLOBALS['start_date'], $GLOBALS['end_date'], 3);
        
        return $response;
    }

    function sqlInput($name, $offerName, $dimensions, $imageType, $headlines, $targetAudience, $landerUrls, $assets, $priority, $placement, $text_on_image, $notes)
    {
        $connection = $this->db_class->connectDB(); // Database of Creative Requests
        $sql = "INSERT INTO creative_request " . "(`name`, `offer`, `dimensions`, `image_type`, `headlines`, `audience`, `lander_url`, `assets`, `assigned_name`, `priority`, `placement`, `text_on_image`, `notes`)" . " VALUES " . 
        "('" . $name . "','" . $offerName . "','" . $dimensions ."','" . $imageType . "','" . $headlines . "','" . $targetAudience . "','" . $landerUrls . "','" . $assets . "','Not Assigned','" . $priority . "','" . $placement . "','" . $text_on_image . "','" . $notes . "')";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        

        if ($result === false) {        
            die(mysqli_error($result));  
        } else {
            $result = 'Added the creative request!';
        }

        $connection->close();
        return $result;
    }

    public function createArray($grandparent, $parent, $child, $apiToPull, $affiliate_id) { // JSON Array Generator
        
        $json = $this->getAPIResponse($apiToPull, $affiliate_id);// Grabs the API information
        $arr = array(); // Empty Array to populate

        // echo "parent: " . var_dump($json[$parent][1]["sub_id"]); // <--- This is how you push out the JSON Array.
        if(isset($grandparent)){
            
            foreach($json->$grandparent as $item) { // Loop through every item needed from cake
                
                array_push($arr, $item->$child); // Create an array
            }

            return $arr;
        }

        if(!isset($grandparent)) {

            foreach($json[$parent] as $item) { // Loop through every item needed from cake

                array_push($arr, $item); // Create an array

            }
            
            return $arr;
        }
    }

    function sqlOutput($dataToPull, $dataTable) {
        $db_class = new db();
        $curRow = 0;
        $array = array();
        
        $connection = $db_class->connectDB(); // Database of Creative Requests
        $sql = "SELECT * FROM " . $dataTable;
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

        if(mysqli_num_rows($result) === 0){
            echo "No requests pending.";
            
        } elseif(mysqli_num_rows($result) > 0) {

                if(isset($dataToPull)) { // Allows for grabbing specific columns.

                    while($row = $result->fetch_array()) {
                    
                        array_push($array, $row[$dataToPull]);

                    }
            
            }   else {
                
                echo "Something went wrong with DB Output function.";
        }

    }

        return $array;
        $result->close();
    }

}




?>



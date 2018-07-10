<?php

require("app_data/localdb.php");

// Varying methods for controller API and DB controls.
class DataController {
    

    public function getAPIResponse() {
        $source = new api;

        $response = $source->cake($GLOBALS['start_date'], $GLOBALS['end_date'], 3);
        
        return $response;
    }

    public function sqlInput($landerTitle, $landerUrl)
    {
        $db_class = new db();
        $post_data = json_encode(
            array('lander_title' => $landerTitle,
            'lander_url' => $landerUrl)
        );

        $connection = $db_class->connectDB(); // Database of Creative Requests
        $sql = "INSERT INTO landers " . "(`lander_title`, `lander_url`)" . " VALUES " . 
        "('" . $landerTitle . "','" . $landerUrl . "')";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        
        if ($result === false) {        
            die(mysqli_error($result));  
        } else {
            $result = 'Added the creative request!';
        }
        $connection->close();

        $jsonResults = array('result' => $result);
        
        return json_encode($jsonResults);
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

    function sqlOutputWhere($dataToPull, $dataTable, $where) {
        $db_class = new db();
        $curRow = 0;
        $array = array();
        $connection = $db_class->connectDB(); // Database of Creative Requests
        $sql = "SELECT `" . $dataToPull . "` FROM " . $dataTable . " WHERE lander_title='" . $where . "'";
        echo $sql;
    
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





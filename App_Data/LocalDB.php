<?php
require("global.php");
class api {

    public function cake($start_date, $end_date, $affiliate_id) {
        $ini_array = parse_ini_file("config.ini", true);
        $website = $ini_array['click_net']['website'][1];
        $affiliate_id = $ini_array[$affiliate_id]['affiliate_id'];
        $api_key = $ini_array[$affiliate_id]['api_key'];
        $apicall = "https://" . $website . "/affiliates/api/Offers/Feed?start_date=" . $start_date . "+00:00:00&end_date=" . $end_date . "+23:59:59&conversion_type=all&start_at_row=1&row_limit=30&fields=&fields=offer_id&fields=offer_contract_id&fields=campaign_id&fields=offer_name&fields=vertical_name&fields=offer_status&fields=price&fields=currency_id&fields=currency_symbol&fields=price_converted&fields=price_format_id&fields=price_format&fields=preview_link&fields=thumbnail_image_url&fields=description&fields=restrictions&fields=allowed_countries&fields=allowed_media_types&fields=expiration_date&fields=tags&fields=advertiser_extended_terms&fields=hidden&fields=date_created&api_key=" . $api_key . "&affiliate_id=" . $affiliate_id;
        $response = file_get_contents($apicall) or die("Error could not create object.");
        $parsed_json = json_decode($response, true);

        // echo $apicall;
        return $parsed_json;
    }

}



class db {


    function connectDB() {
        
        $ini_array = parse_ini_file('config.ini');
        $servername = $ini_array['servername'];
        $username = $ini_array['username'];
        $password = $ini_array['password'];
        $dbname = $ini_array['dbname'];
        $connected = false;
        
        $connection = mysqli_connect($servername, $username, $password, $dbname);

        if(!$connection) {
            die('Connection Failed: ' . mysqli_connect_error());
        }

        return $connection;
    }
}
?>

<?php
require("global.php");
class api {

    public function cake($start_date, $end_date, $affiliate_id) {
        $ini_array = parse_ini_file("../config.ini", true);
        $website = $ini_array['click_net']['website'][1];
        $affiliate_id = $ini_array[$affiliate_id]['affiliate_id'];
        $api_key = $ini_array[$affiliate_id]['api_key'];
        $apicall = "https://" . $website . "/affiliates/api/Reports/CampaignSummary?start_date=" . $start_date . "+00:00:00&end_date=" . $end_date . "+23:59:59&conversion_type=all&start_at_row=1&row_limit=30&fields=offer_name&fields=impressions&fields=clicks&fields=conversions&fields=conversion_rate&fields=offer_id&fields=revenue&fields=revenue_converted&api_key=" . $api_key . "&affiliate_id=" . $affiliate_id;
        $response = file_get_contents($apicall) or die("Error could not create object.");
        $parsed_json = json_decode($response, true);

        echo $apicall;
        // return $parsed_json;
    }

}
?>
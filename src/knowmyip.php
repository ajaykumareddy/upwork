<?php 

namespace IP;

use Lib\BaseSerializer;

class KnowMyIP {
    public static function getIPAddress() {
        $response = array("ip" => $_SERVER['REMOTE_ADDR']);
        if(isset($_REQUEST['name'])) {
            $response['greeting'] = strip_tags($_REQUEST['name']);
        }
        BaseSerializer::sendJsonResponse($response);
    }
}

?>
<?php 


namespace Lib;

class BaseSerializer {

    public static function sendJsonResponse($data) {   
        header('Content-Type: application/json');
        header('x-hello-world: AR');
        echo json_encode($data);
    }

    
}
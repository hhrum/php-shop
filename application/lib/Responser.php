<?php

namespace application\lib;

class Responser {
    
    public static function redirectResponse($url) {
		header('location: '.$url);
		exit;
    }

    public static function ajaxSuccessResponse() {
        $response = [
            "status" => true
        ];

        echo json_encode($response);

        exit();
    }

    public static function ajaxErrorResponse($message) {
        $response = [
            "status" => false,
            "message" => $message
        ];

        echo json_encode($response);
        
        exit();
    }

    public static function ajaxRedirectResponse($url) {

    }

}
<?php

namespace Phylovely\ApiService;

class CoreResponse {

    private $successMessage;
    private $errorMessage;
	private $errorList;
	
	public static function ok($output, $message=""){
        $result["success"] = true;
        $result["result"] = $output;
        if(!is_null($message) && !empty($message)){
            $result["message"] = $message;
        }

        return $result;
	}

	public static function fail($ex){
        $result["success"] = false;
        if(!empty($ex->getErrorMessage()) && !is_null($ex->getErrorMessage()) ){
            $result["error_message"] = $ex->getErrorMessage();
        }

        if(is_array($ex->getErrorList())){
            $result["error_list"] = $ex->getErrorList();
        }

        return $result;
        
	}
}
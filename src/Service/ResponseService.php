<?php

namespace Gaurang\ResponseGenerator\Service;

use Gaurang\ResponseGenerator\Traits\RequestValidation;
/**
 * Layer to call and perform datastore operations
 */
class ResponseService
{
    use RequestValidation;

    public $data;
    
    public function generate($data)
    {
        //set response data
        $this->data = $data;

        //generate response
        $this->responseGenerator();
    }

    private function responseGenerator()
    {
        $this->validateData($this->data);
    }
    
}
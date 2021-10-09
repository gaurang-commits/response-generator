<?php

namespace Gaurang\ResponseGenerator\Traits;
use Throwable;
trait RequestValidation
{
    protected function validateData($type)
    {
        try {
            $requestPayloadType = gettype($type);
            echo $requestPayloadType;
        } catch (Throwable $e) {
            return false;
        }
    }
}
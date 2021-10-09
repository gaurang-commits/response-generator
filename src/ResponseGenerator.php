<?php
namespace Gaurang\ResponseGenerator;

use \Illuminate\Support\Facades\Facade;

/**
 * Facade for Response Generator
 */
class ResponseGenerator extends Facade
{

    /**
     * Returning service name
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Gaurang\ResponseGenerator\Service\ResponseService';
    }
}
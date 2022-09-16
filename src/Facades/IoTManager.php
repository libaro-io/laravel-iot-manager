<?php

namespace Libaro-io\IoTManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Libaro-io\IoTManager\IoTManager
 */
class IoTManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-iot-manager';
    }
}

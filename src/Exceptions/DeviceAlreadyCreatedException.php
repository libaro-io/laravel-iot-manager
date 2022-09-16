<?php

declare(strict_types=1);

namespace Libaro\IoTManager\Exceptions;

use RuntimeException;

final class DeviceAlreadyCreatedException extends RuntimeException
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }

    public function __toString()
    {
        return sprintf("exception '%s' with message '%s'\n\n%s", get_class($this), $this->getMessage(), parent::__toString());
    }
}

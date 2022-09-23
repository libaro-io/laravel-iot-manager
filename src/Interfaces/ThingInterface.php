<?php

namespace Libaro\IoTManager\Interfaces;

use Libaro\IoTManager\Models\IotDevice;

interface ThingInterface
{
    public function create(string $name, string $identifier = null): IotDevice;

    public function activate(): void;

    public function deactivate(): void;

    public function generateCertificates(): void;
}

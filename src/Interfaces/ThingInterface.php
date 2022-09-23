<?php

namespace Libaro\IoTManager\Interfaces;

use Libaro\IoTManager\Models\IotDevice;

interface ThingInterface
{
    public function create(string $name, string $identifier = null): IotDevice;

    public function delete(IotDevice $device): bool;

    public function activate(IotDevice $device): bool;

    public function deactivate(IotDevice $device): bool;

    public function generateCertificates(IotDevice $device): bool;
}

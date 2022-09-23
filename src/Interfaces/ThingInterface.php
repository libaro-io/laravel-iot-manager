<?php

namespace Libaro\IoTManager\Interfaces;

use Libaro\IoTManager\Models\IotDevice;

interface ThingInterface
{
    public function create(string $name, string $identifier = null): IotDevice;

    public function delete(IotDevice $device): bool;

    public function activate(): bool;

    public function deactivate(): bool;

    public function generateCertificates(): bool;
}

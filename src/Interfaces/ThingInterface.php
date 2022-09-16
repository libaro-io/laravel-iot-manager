<?php

namespace Libaro\IoTManager\Interfaces;

interface ThingInterface
{
    public function create(string $name, string $identifier = null): void;

    public function activate(): void;

    public function deactivate(): void;

    public function generateCertificates(): void;
}

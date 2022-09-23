<?php

declare(strict_types=1);

namespace Libaro\IoTManager\Services;

use Aws\Iot\IotClient;
use Illuminate\Support\Str;
use Libaro\IoTManager\Interfaces\ThingInterface;
use Libaro\IoTManager\Exceptions\DeviceAlreadyCreatedException;
use Libaro\IoTManager\Models\IotDevice;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

final class AwsService implements ThingInterface
{
    private IotClient $client;

    public function __construct()
    {
        $this->client = new IotClient([
            'version' => 'latest',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION', 'eu-west-1'),
        ]);
    }

    public function create(string $name, string $identifier = null): IotDevice
    {
        if ($identifier === null) {
            $identifier = (string) Str::uuid();
        }

        if ($this->checkIfExists($identifier)) {
            throw new DeviceAlreadyCreatedException("Device already created in AWS IoT.");
        }

        // creates the device in AWS
        $this->client->createThing([
            'thingName' => $identifier,
        ]);

        return new IotDevice([
            'name' => $name,
            'identifier' => $identifier,

        ]);
    }

    public function activate(): void
    {
        // TODO: Implement activate() method.
    }

    public function deactivate(): void
    {
        // TODO: Implement deactivate() method.
    }

    public function generateCertificates(): void
    {
        // TODO: Implement generateCertificates() method.
    }

    private function checkIfExists(string $identifier): bool
    {
        try {
            $this->client->describeThing([
                'thingName' => $identifier,
            ]);

            return true;
        } catch (ResourceNotFoundException) {
            return false;
        }
    }
}

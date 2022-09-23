<?php

namespace Libaro\IoTManager\Traits;

use Libaro\IoTManager\Models\IotDevice;
use Libaro\IoTManager\Services\AwsService;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasThing
{
    public function bootHasThing()
    {
    }

    /**
     * Set the polymorphic relation.
     *
     * @return MorphOne
     */
    public function thing(): MorphOne
    {
        return $this->morphOne(IotDevice::class, 'model');
    }

    public function addThing(IotDevice $thing)
    {
        $this->thing()->save($thing);
    }

    public function createThing(string $name = null, string $identifier = null) {
        $thing = app(AwsService::class)->create($name ?? __CLASS__ . '-' . $this->id, $identifier ?? __CLASS__ . '-' . $this->id);
        $this->addThing($thing);
    }

    public function removeThing(IotDevice $thing) {
        $this->thing()->delete();
    }

    /**
     * Will activate Thing in AWS
     *
     * @return boolean
     */
    public function activate()
    {
        return app(AwsService::class)->activate($this->thing());
    }

    /**
     * Will deactivate Thing in AWS
     *
     * @return boolean
     */
    public function deactivate()
    {
        return app(AwsService::class)->deactivate($this->thing());
    }

    /**
     * Generate necessary certificates for Thing in AWS
     *
     * @return boolean
     */
    public function generateCertificates()
    {
        return app(AwsService::class)->generateCertificates($this->thing());
    }
}

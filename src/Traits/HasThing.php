<?php

namespace Libaro\IoTManager\Traits;

use Libaro\IoTManager\Models\IotDevice;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Libaro\IoTManager\Services\AwsService;


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
    public function thing (): MorphOne
    {
        return $this->morphOne(IotDevice::class, 'model');
    }

    public function addThing (IotDevice $thing) {
        $this->thing()->save($thing);
    }

    /**
     * Will activate Thing in AWS
     *
     * @return void
     */
    public function activate()
    {
        return app(AwsService::class)->activate($this->thing());
    }

    /**
     * Will deactivate Thing in AWS
     *
     * @return void
     */
    public function deactivate()
    {
        return app(AwsService::class)->activate($this->thing());
    }

    /**
     * Generate necessary certificates for Thing in AWS
     *
     * @return void
     */
    public function generateCertificates()
    {
        return app(AwsService::class)->generateCertificates($this->thing());
    }
}

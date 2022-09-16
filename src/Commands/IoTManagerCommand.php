<?php

namespace Libaro\IoTManager\Commands;

use Illuminate\Console\Command;

class IoTManagerCommand extends Command
{
    public $signature = 'laravel-iot-manager';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

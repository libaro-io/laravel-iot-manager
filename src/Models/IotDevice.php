<?php
declare(strict_types=1);


namespace Libaro\IoTManager\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property-read string $identifier
 * @property string $certificate_id
 * @property string $certificate_arn
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class IotDevice extends Model
{
    protected $table = 'iot_device';

    protected $fillable = [
        'id',
        'name',
        'identifier',
        'certificate_id',
        'certificate_arn',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;





/**
 * @property int $id
 *
 * @property string $name
 * @property string $zone
 * @property string $specs
 *
 * @property float $price_per_hour
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class Computer extends Model
{
    protected $fillable = [
        'name',
        'zone',
        'specs',
        'price_per_hour',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}

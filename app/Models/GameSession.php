<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;





/**
 * @property int $id
 * @property int $computer_id
 * @property int $client_id
 *
 * @property Carbon $start_at
 * @property Carbon $end_at
 *
 * @property float $total_cost
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class GameSession extends Model
{
    protected $fillable = [
        'computer_id',
        'client_id',
        'total_cost',
        'start_at',
    ];

    protected $casts = [
        'start_at' => 'datetime',
        'end_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;





/**
 * @property int $id
 *
 * @property string $name
 * @property string $address
 * @property string $phone
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Club extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function loadComputers(): BelongsToMany {
        return $this->belongsToMany(
            Computer::class,
            'computers_club',
            'club_id',
            'computer_id');
    }
}

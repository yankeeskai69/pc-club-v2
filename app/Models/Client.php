<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;





/**
 * @property int $id
 *
 * @property string $login
 * @property string $phone
 * @property string $email
 * @property float $balance
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Client extends Model
{
    protected $fillable = [
        'login',
        'phone',
        'email',
        'balance',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}

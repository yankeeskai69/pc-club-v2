<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ComputersClub extends Model
{
    protected $table = "computers_club";
    public $timestamps = false;
    public $incrementing = false;
    public $primaryKey = null;

    protected $fillable = [
        'club_id',
        'computer_id',
    ];
}

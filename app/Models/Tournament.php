<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'starts',
        'ends',
        'tournament_id'
    ];

    public function clubs()
    {
        return $this->HasMany(Tournament_To_Club::class,'tournament_id');
    }
}

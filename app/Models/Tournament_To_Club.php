<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament_To_Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'tournament_id',
        'club_id'
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class,'tournament_id');
    }

    public function club()
    {
        return $this->belongsTo(Club::class,'club_id');
    }
}

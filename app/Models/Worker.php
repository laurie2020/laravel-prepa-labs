<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $table = "workers";

    protected $fillable = [
        "lastname",
        "firstname",
        "poste",
        "photo",
        "team_id"
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}

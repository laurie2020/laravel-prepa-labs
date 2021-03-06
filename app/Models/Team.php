<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = "teams";

    protected $fillable = [
        "title",
        "description"
    ];

    public function workers()
    {
        return $this->hasMany(Worker::class);
    }
}

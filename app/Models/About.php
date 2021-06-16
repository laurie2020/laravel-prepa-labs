<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = "abouts";

    protected $fillable = [
        "title",
        "description",
        "button"
    ];

    public function about_facts()
    {
        return $this->hasMany(AboutFact::class);
    }
}

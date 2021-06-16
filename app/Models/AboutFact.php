<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutFact extends Model
{
    use HasFactory;

    protected $table = "about_facts";

    protected $fillable = [
        "icon",
        "title",
        "description",
        "about_id"
    ];

    public function about()
    {
        return $this->belongsTo(About::class);
    }
}

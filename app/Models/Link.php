<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $table = "links";

    protected $fillable = [
        "name",
        "link",
        "footer_id"
    ];

    public function footer()
    {
        return $this->belongsTo(Footer::class);
    }
}
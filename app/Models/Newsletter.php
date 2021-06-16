<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    protected $table = "newsletters";

    protected $fillable = [
        "title",
        "description",
        "button",
        "footer_id"
    ];

    public function footer()
    {
        return $this->belongsTo(Footer::class);
    }
}

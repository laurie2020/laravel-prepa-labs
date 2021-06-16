<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterService extends Model
{
    use HasFactory;

    protected $table = "footer_services";

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

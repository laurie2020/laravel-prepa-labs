<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $table = "phones";

    protected $fillable = [
        "number",
        "contact_id",
        "footer_id"
    ];

    public function footer()
    {
        return $this->belongsTo(Footer::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}

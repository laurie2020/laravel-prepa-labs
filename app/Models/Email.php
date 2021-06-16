<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $table = "emails";

    protected $fillable =  [
        "mail",
        "contact_id",
        "footer_id"
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function footer()
    {
        return $this->belongsTo(Footer::class);
    }
}

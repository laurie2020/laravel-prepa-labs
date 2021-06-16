<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $table = "personnes";

    protected $fillable = [
        "lastname",
        "firstname",
        "profession",
        "photo",
        "testimonial_detail_id"
    ];

    public function testimonial_detail()
    {
        return $this->belongsTo(TestimonialDetail::class);
    }
}

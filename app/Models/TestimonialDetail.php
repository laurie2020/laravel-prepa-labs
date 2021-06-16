<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialDetail extends Model
{
    use HasFactory;

    protected $table = "testimonials_details";

    protected $fillable = [
        "text",
        "testimonial_id"
    ];

    public function testimonial()
    {
        return $this->belongsTo(TestimonialDetail::class);
    }

    public function personne()
    {
        return $this->hasOne(Personne::class);
    }
}

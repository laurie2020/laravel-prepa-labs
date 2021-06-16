<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = "testimonials";

    protected $fillable = [
        "title",
        "description"
    ];

    public function testimonial_details()
    {
        return $this->hasMany(TestimonialDetail::class);
    }
}

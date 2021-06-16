<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureDetail extends Model
{
    use HasFactory;

    protected $table = "feature_details";

    protected $fillable = [
        "title",
        "description",
        "description_i",
        "paragraphe1",
        "paragraphe2",
        "paragraphe3",
        "image",
        "feature_id"
    ];

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }

}

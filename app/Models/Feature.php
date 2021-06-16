<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $table = "features";

    protected $fillable = [
        "title",
        "description"
    ];

    public function feature_details()
    {
        return $this->hasMany(FeatureDetail::class);
    }
}

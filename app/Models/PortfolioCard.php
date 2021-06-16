<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCard extends Model
{
    use HasFactory;

    protected $table = "portfolio_cards";

    protected $fillable = [
        "title",
        "description",
        "image",
        "categorie",
        "portfolio_id"
    ];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}

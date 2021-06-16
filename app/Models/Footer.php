<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Inline\Element\Link;

class Footer extends Model
{
    use HasFactory;

    protected $table = "footers";

    protected $fillable = [
        "title"
    ];

    public function adresses()
    {
        return $this->hasMany(Adresse::class);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function emails()
    {
        return $this->hasMany(Email::class);
    }

    public function links()
    {
        return $this->hasMany(Link::class);
    }

    public function footer_services()
    {
        return $this->hasMany(FooterService::class);
    }

    public function newsletter()
    {
        return $this->hasMany(Newsletter::class);
    }
}

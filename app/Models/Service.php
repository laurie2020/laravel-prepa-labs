<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = "services";

    protected $fillable = [
        "title",
        "description"
    ];

    public function service_details()
    {
        return $this->hasMany(ServiceDetail::class);
    }
}

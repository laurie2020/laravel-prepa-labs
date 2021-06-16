<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    use HasFactory;

    protected $table = "service_details";

    protected $fillable = [
        "icon",
        "title",
        "description",
        "service_id"
    ];
    
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}

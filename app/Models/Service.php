<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'active',
    ];

    /**
     * Relación: Un servicio tiene muchas solicitudes.
     */
    public function serviceRequests()
    {
        // Laravel buscará automáticamente 'service_id' en la tabla 'service_requests'
        return $this->hasMany(ServiceRequest::class, 'service_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service_Request extends Model
{

    // Forzamos el nombre de la tabla:
    protected $table = 'service_requests';

    protected $fillable = [
        'service_id', 
        'name',
        'email',
        'phone',
        'message',
        'status',
    ];


    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}

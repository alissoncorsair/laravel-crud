<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente', 'numero_container', 'tipo_container', 'status_container', 'categoria_container'
    ];

}

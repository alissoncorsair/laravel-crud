<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContainerMovement extends Model
{
    use HasFactory;
    protected $fillable = [
      'tipo', 'entrada', 'saida'
    ];
}

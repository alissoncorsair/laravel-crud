<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContainerMovement extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'container_movement';
    protected $fillable = [
      'tipo', 'entrada', 'saida', 'container_id'
    ];

    public function getDateStartAttribute($entrada)
    {
        return Carbon::parse($entrada)->format('Y-m-d\TH:i');
    }

    public function getDateEndAttribute($saida)
    {
        return Carbon::parse($saida)->format('Y-m-d\TH:i');
    }
}

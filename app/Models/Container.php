<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'containers';
    protected $fillable = [
        'cliente', 'numero_container', 'tipo_container', 'status_container', 'categoria_container', 'qtd_movimentos'
    ];

    public function movements() {
        return $this->hasMany(ContainerMovement::class, 'container_id');
    }

}

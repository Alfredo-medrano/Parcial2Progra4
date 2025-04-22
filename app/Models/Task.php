<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    use HasFactory;

    protected $fillable = ['user_id', 'categoria_id', 'titulo', 'descripcion', 'prioridad', 'estado', 'fecha_vencimiento'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}

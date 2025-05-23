<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $fillable = ['nombre', 'email', 'password', 'rol'];

    public function categorias() {
        return $this->hasMany(Categoria::class);
    }

    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function notificaciones() {
        return $this->hasMany(Notificacion::class);
    }
}

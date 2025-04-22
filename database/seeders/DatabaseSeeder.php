<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Notificacion;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
{
    $user = User::create([
        'nombre' => 'Juan Pérez',
        'email' => 'juan@example.com',
        'password' => bcrypt('password'),
        'rol' => 'Administrador',
    ]);

    $categoria = Categoria::create([
        'user_id' => $user->id,
        'nombre' => 'Trabajo',
        'descripcion' => 'Tareas relacionadas con el trabajo',
    ]);

    $task = Task::create([
        'user_id' => $user->id,
        'categoria_id' => $categoria->id,
        'titulo' => 'Enviar informe final',
        'descripcion' => 'Informe mensual del proyecto',
        'prioridad' => 'Alta',
        'estado' => 'Pendiente',
        'fecha_vencimiento' => now()->addDays(3),
    ]);

    Notificacion::create([
        'user_id' => $user->id,
        'mensaje' => 'Tarea próxima a vencer: Enviar informe final',
        'estado' => 'No Leída',
    ]);
    }
}
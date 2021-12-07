<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Profesor']);
        $role3 = Role::create(['name' => 'Estudiante']);

        Permission::create(['name' => 'dashboard'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'asistencias.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'asistencias.create'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'asistencias.store'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'asistencias.show'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'asistencias.edit'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'asistencias.update'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'asistencias.destroy'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'detalleevaluacions.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'detalleevaluacions.create'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'detalleevaluacions.store'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'detalleevaluacions.show'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'detalleevaluacions.edit'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'detalleevaluacions.update'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'detalleevaluacions.destroy'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'estudiantes.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'estudiantes.create'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'estudiantes.store'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'estudiantes.show'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'estudiantes.edit'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'estudiantes.update'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'estudiantes.destroy'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'evaluacions.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'evaluacions.create'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'evaluacions.store'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'evaluacions.show'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'evaluacions.edit'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'evaluacions.update'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'evaluacions.destroy'])->syncRoles([$role1, $role2, $role3]);
        
        Permission::create(['name' => 'materias.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'materias.create'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'materias.store'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'materias.show'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'materias.edit'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'materias.update'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'materias.destroy'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'preguntas.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'preguntas.create'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'preguntas.store'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'preguntas.show'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'preguntas.edit'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'preguntas.update'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'preguntas.destroy'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'profesors.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'profesors.create'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'profesors.store'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'profesors.show'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'profesors.edit'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'profesors.update'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'profesors.destroy'])->syncRoles([$role1, $role2, $role3]);
        
        Permission::create(['name' => 'temas.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'temas.create'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'temas.store'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'temas.show'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'temas.edit'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'temas.update'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'temas.destroy'])->syncRoles([$role1, $role2, $role3]);
        
    }
}

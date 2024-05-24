<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Module;
use App\Models\Student;

class EscuelaController extends Controller
{
    public function index()
    {
        $data = [
            'profesores_con_modulos' => $this->profesoresConModulos(),
            'estudiantes_por_modulo' => $this->estudiantesPorModulo(1),  
            'modulos_por_estudiante' => $this->modulosPorEstudiante(1),  
            'estudiante_con_modulos_y_profesores' => $this->estudianteConModulosYProfesores(1),  
            'modulos_con_cantidad_de_estudiantes' => $this->modulosConCantidadDeEstudiantes()
        ];
        return response()->json($data);
    }

   
    private function profesoresConModulos()
    {
        return Teacher::with('modules')->get();
    }

    
    private function estudiantesPorModulo($idModulo)
    {
        $modulo = Module::with('studies')->findOrFail($idModulo);
        return $modulo->students;
    }

    
    private function modulosPorEstudiante($idEstudiante)
    {
        $estudiante = Student::with('studies')->findOrFail($idEstudiante);
        return $estudiante->modules;
    }

    
    private function estudianteConModulosYProfesores($idEstudiante)
    {
        $estudiante = Student::with('studies')->findOrFail($idEstudiante);
        return $estudiante;
    }

    
    private function modulosConCantidadDeEstudiantes()
    {
        return Module::withCount('studies')->get();
    }



}

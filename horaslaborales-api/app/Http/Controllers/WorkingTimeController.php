<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workingtime;

class WorkingTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $workingtimes = Workingtime::select
        ('student_cif as Alumno_CIF', 'student_name as Nombre_alumno','hrs_reached as Horas_completas', 'hour_num as Horas', 
            'hr_event as Descripcion_del_registro', 'hr_registered_date as Fecha_de_registro_de_horas') ->get();
        return response()->json(['status' => 'success', 'data' => $workingtimes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

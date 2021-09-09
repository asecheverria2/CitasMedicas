<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Especialidad;
use App\Models\Paciente;
use App\Models\Docespe;
use Illuminate\Http\Request;

/**
 * Class AppointmentController
 * @package App\Http\Controllers
 */
class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::paginate();
        return view('appointment.index', compact('appointments'))
            ->with('i', (request()->input('page', 1) - 1) * $appointments->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function create($id, Request $request) 
    {
        $select = $request->select2;
        $appointment = new Appointment();
        $doctores = Doctor::all();
        $especialidades = Especialidad::all();
        $especialidads = Especialidad::where('especialidads.id','=',$request->select2)->get();
        $pacientes = Paciente::all();
        $docespes = Docespe::where('docespes.especialidad_id','=',$request->select2)
        ->join('doctors', 'doctors.id', '=' , 'docespes.doctor_id')
        ->join('users', 'users.id', '=' , 'doctors.usuario_id')
        ->get();
        foreach($pacientes as $paciente){
            if ($id== $paciente->user->id) {
                $pacient = Paciente::find($paciente->id);
            }
        }
        
        return view('appointment.create', compact('appointment','doctores','especialidades','pacient','docespes','especialidads','select'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Appointment::$rules);

        $appointment = Appointment::create($request->all());

        return redirect()->route('appointments.index')
            ->with('success', 'Cita creada con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointment = Appointment::find($id);
        $doctores = Doctor::all();
        $especialidades = Especialidad::all();
        return view('appointment.show', compact('appointment','doctores','especialidades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $idPac, Request $request)
    {
        $appointment = Appointment::find($id);
        $select = $appointment->especialidad_id;
        //$select = 1;
        //$appointment = new Appointment();
        $doctores = Doctor::all();
        $especialidades = Especialidad::all();
        $especialidads = Especialidad::where('especialidads.id','=',$appointment->especialidad_id)->get();
        $pacientes = Paciente::all();
        $docespes = Docespe::where('docespes.especialidad_id','=',$appointment->especialidad_id)
        ->join('doctors', 'doctors.id', '=' , 'docespes.doctor_id')
        ->join('users', 'users.id', '=' , 'doctors.usuario_id')
        ->get();
        foreach($pacientes as $paciente){
            if ($idPac== $paciente->user->id) {
                $pacient = Paciente::find($paciente->id);
            }
        }

        return view('appointment.edit', compact('appointment','doctores','especialidades','pacient','docespes','especialidads','select'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        request()->validate(Appointment::$rules);

        $appointment->update($request->all());

        return redirect()->route('appointments.index')
            ->with('success', 'Cita actualizada con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $appointment = Appointment::find($id)->delete();

        return redirect()->route('appointments.index')
            ->with('success', 'Cita eliminada con éxito');
    }
}

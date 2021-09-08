<?php

namespace App\Http\Controllers;

use App\Models\Docespe;
use App\Models\Doctor;
use App\Models\Especialidad;
use Illuminate\Http\Request;

/**
 * Class DocespeController
 * @package App\Http\Controllers
 */
class DocespeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docespes = Docespe::paginate();
        $docespe = Docespe::join('doctors', 'docespes.doctor_id', '=', 'doctors.id')
        ->join('users', 'doctors.usuario_id', '=', 'users.id')
        ->join('especialidads', 'docespes.especialidad_id', '=', 'especialidads.id')->paginate();

        return view('docespe.index', compact('docespes'))
            ->with('i', (request()->input('page', 1) - 1) * $docespes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctore = Doctor::leftjoin('users', 'doctors.usuario_id', '=', 'users.id')->get();
        $doctores = Doctor::all();
        $especialidades = Especialidad::all();
        $docespe = new Docespe();
        return view('docespe.create', compact('docespe','doctores','especialidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Docespe::$rules);

        $docespe = Docespe::create($request->all());

        return redirect()->route('docespes.index')
            ->with('success', 'Docespe created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docespe = Docespe::find($id);

        return view('docespe.show', compact('docespe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docespe = Docespe::find($id);
        $doctores = Doctor::all();
        $especialidades = Especialidad::all();
        return view('docespe.edit', compact('docespe','doctores','especialidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Docespe $docespe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docespe $docespe)
    {
        request()->validate(Docespe::$rules);

        $docespe->update($request->all());

        return redirect()->route('docespes.index')
            ->with('success', 'Docespe updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $docespe = Docespe::find($id)->delete();

        return redirect()->route('docespes.index')
            ->with('success', 'Docespe deleted successfully');
    }
}

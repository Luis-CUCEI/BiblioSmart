<?php

namespace App\Http\Controllers;

use App\Degree;
use App\Division;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $degrees = Degree::with('division')->get();
        return view('degree.indexDegree', compact('degrees'));
    }

    public function create()
    {
        $divisions = Division::All()->pluck('name', 'id')->toArray();
        return view('degree.formDegree')->with(['divisions' => $divisions]);
    }

    public function store(Request $request)
    {
        $rules = [
            'career' => 'required|min:5',
            'division_id' => 'required|',
        ];

        $messages = [
            'career.required' => 'Agrega nombre a la carrera para continuar',
            'division_id.required' => 'Selecciona una division para continuar',
        ];

        $this->validate($request, $rules, $messages);

        Degree::create($request->all());


        $notificacion = array(
            'message' => 'Gracias! La Carerra a sido creada correctamente.',
            'alert-type' => 'success'
        );

        return redirect()->route('degrees.index')->with($notificacion);
    }

    public function show(Degree $degree)
    {
        return view('degree.showDegree')->with(['degree' => $degree,]);
    }

    public function edit(Degree $degree)
    {
        $divisions = Division::All()->pluck('name', 'id')->toArray();
        return view('degree.formDegree')->with(['degree' => $degree, 'divisions' => $divisions]);
    }

    public function update(Request $request, Degree $degree)
    {
        $rules = [
            'career' => 'required|min:5',
            'division_id' => 'required|',
        ];

        $messages = [
            'career.required' => 'Agrega nombre a la carrera para continuar',
            'division_id.required' => 'Selecciona una division para continuar',
        ];

        $this->validate($request, $rules, $messages);

        Degree::where('id', $degree->id)->update($request->except('_token', '_method'));

        $notificacion = array(
            'message' => 'Gracias! La Carrera a sido modificada correctamente.',
            'alert-type' => 'info'
        );

        return redirect()->route('degrees.show', $degree->id)->with($notificacion);
    }

    public function destroy(Degree $degree)
    {
        $degree->delete();

        $notificacion = array(
            'message' => 'La carrera a sido eliminada correctamente.',
            'alert-type' => 'warning'
        );

        return redirect()->route('degrees.index')->with($notificacion);
    }

    public function trash()
    {
        $tdegrees = Degree::onlyTrashed()->get();

        return view('degree.indexDegree', compact('tdegrees'));
    }

    public function retrieve(Request $request)
    {
        Degree::onlyTrashed()->find($request->id)->restore();

        $notificacion = array(
            'message' => 'La Carerra a sido recuperada correctamente.',
            'alert-type' => 'success'
        );

        return redirect()->route('degrees.index')->with($notificacion);
    }
}

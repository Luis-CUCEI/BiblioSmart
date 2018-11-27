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
        $degrees = Degree::all();
        return view('degree.indexDegree', compact('degrees'));
    }

    public function create()
    {
        $divisions = Division::All()->pluck('name', 'id')->toArray();
        return view('degree.formDegree')->with(['divisions'=>$divisions]);
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
        return redirect()->route('degrees.index');
    }

    public function show(Degree $degree)
    {
        return view('degree.showDegree')->with(['degree'=> $degree,]);
    }

    public function edit(Degree $degree)
    {
        $divisions = Division::All()->pluck('name', 'id')->toArray();
        return view('degree.formDegree')->with(['degree'=>$degree, 'divisions'=>$divisions]);
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

        return redirect()->route('degrees.index');
    }

    public function destroy(Degree $degree)
    {
        $degree->delete();
        return redirect()->route('degrees.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Division;
use App\Degree;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Div;

class DivisionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $divisions = Division::all();
        return view('division.indexDivision', compact('divisions'));
    }


    public function create()
    {
        return view('division.formDivision');
    }


    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:5',
        ];

        $messages = [
            'name.required' => 'Agrega el nombre de la division para continuar.',
        ];

        $this->validate($request, $rules, $messages);

        Division::create($request->all());

        $notificacion = array(
            'message' => 'Gracias! La division a sido creada correctamente.',
            'alert-type' => 'success'
        );

        return redirect()->route('divisions.index')->with($notificacion);
    }


    public function show(Division $division)
    {
        return view('division.showDivision')->with(['division' => $division,]);
    }

    public function edit(Division $division)

    {
        return view('division.formDivision', compact('division'));
    }


    public function update(Request $request, Division $division)
    {

        $rules = [
            'name' => 'required|min:5',
        ];

        $messages = [
            'name.required' => 'Agrega el nombre de la division para continuar.',
        ];

        $this->validate($request, $rules, $messages);

        Division::where('id', $division->id)->update($request->except('_token', '_method', 'token'));

        $notificacion = array(
            'message' => 'Gracias! La division a sido modificada correctamente.',
            'alert-type' => 'info'
        );

        return redirect()->route('divisions.show', $division->id)->with($notificacion);
    }

    public function destroy(Division $division)
    {
        $division->delete();

        $notificacion = array(
            'message' => 'La division a sido eliminada correctamente.',
            'alert-type' => 'warning'
        );

        return redirect()->route('divisions.index')->with($notificacion);
    }
}

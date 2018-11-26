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
          'name' => 'required|min:5'
        ];

        $messages = [
          'name.required' => 'Agrega el nombre de la division para continuar.',
        ];

        $this->validate($request, $rules, $messages);

        Division::create($request->all());
        return redirect()->route('divisions.index');
    }


    public function show(Division $division)
    {
        $degrees = Degree::all();
        return view('division.showDivision')->with(['division'=> $division, 'degrees' => $degrees]);
    }

    public function edit(Division $division)
    {
        return view('division.formDivision', compact('division'));
    }


    public function update(Request $request, Division $division)
    {
        Division::where('id', $division->id)->update($request->except('_token', '_method', 'token'));
        return redirect()->route('divisions.show', $division->id);
    }

    public function destroy(Division $division)
    {
        $division->delete();
        return redirect()->route('divisions.index');
    }
}

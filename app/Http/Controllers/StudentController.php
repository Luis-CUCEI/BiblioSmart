<?php

namespace App\Http\Controllers;

use App\Book;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $students = Student::all();
        return view('student.indexStudent', compact('students'));
    }

    public function create()
    {
        return view('student.formStudent');
    }

    public function store(Request $request)
    {
        $rules = [
            'fisrtname' => 'required|',
            'lastname' => 'required|',
            'password' => 'required|',
            'email' => "required|unique:students,email,$request->id",
            'alumnocode' => "required|unique:students,alumnocode,$request->id",
            'phonenumber' => "unique:students,phonenumber,$request->id",
            'gender' => 'required|',
        ];

        $messages = [
            'fisrtname.required' => 'Agrega nombre para continuar',
            'lastname.required' => 'Agrega Apellido para continuar',
            'password.required' => 'Agrega Contraseña para continuar',
            'email.required' => 'Agrega Correo para continuar',
            'email.unique' => 'El Correo ya existe, intente con uno nuevo',
            'alumnocode.required' => 'Agrega Codigo para continuar',
            'alumnocode.unique' => 'El cogido de alumno ya existe, intente con uno nuevo',
            'phonenumber.unique' => 'El numero de telefono ya existe intente con uno nuevo',
            'gender.required' => 'Agregar Genero para continuar',
        ];

        $this->validate($request, $rules, $messages);

        Student::create($request->all());

        $notificacion = array(
            'message' => 'Gracias! El estudiante a sido creada correctamente.',
            'alert-type' => 'success'
        );

        return redirect()->route('students.index')->with($notificacion);
    }

    public function show(Student $student)
    {
        return view('student.showStudent')->with(['student' => $student]);
    }

    public function edit(Student $student)
    {
        return view('student.formStudent')->with(['student' => $student]);
    }

    public function update(Request $request, Student $student)
    {
        $rules = [
            'fisrtname' => 'required|',
            'lastname' => 'required|',
            'email' => "required|unique:students,email,$student->id",
            'alumnocode' => "required|unique:students,alumnocode,$student->id",
            'phonenumber' => "unique:students,phonenumber,$student->id",
            'gender' => 'required|',
        ];

        $messages = [
            'fisrtname.required' => 'Agrega nombre para continuar',
            'email.required' => 'Agrega Correo para continuar',
            'email.unique' => 'El Correo ya existe, intente con uno nuevo',
            'alumnocode.required' => 'Agrega Codigo para continuar',
            'alumnocode.unique' => 'El cogido de alumno ya existe, intente con uno nuevo',
            'phonenumber.unique' => 'El numero de telefono ya existe intente con uno nuevo',
            'gender.required' => 'Agregar Genero para continuar',
        ];

        $this->validate($request, $rules, $messages);

        Student::where('id', $student->id)->update($request->except('_token', '_method'));

        $notificacion = array(
            'message' => 'Gracias! El estudiante a sido modificado correctamente.',
            'alert-type' => 'info'
        );

        return redirect()->route('students.show', $student->id)->with($notificacion);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        $notificacion = array(
            'message' => 'El estudiante a sido eliminado correctamente.',
            'alert-type' => 'warning'
        );

        return redirect()->route('students.index')->with($notificacion);
    }
}

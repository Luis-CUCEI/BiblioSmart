@extends('layouts.theme')
@section('content')

    <header class="page-header">
        <h2>Estudiantes</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ url('#') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Dashboard / Estudiantes / Mostrar</span></li>
            </ol>

            <a class="sidebar-right-toggle" ><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"> CUCEI - Estudiantes</h2>
                </header>
                <div class="panel-body">
                    @if($students->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover mb-none">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cogido</th>
                                    <th>Fecha de Registro</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>
                                            <a href="{{ route('students.show', $student->id) }}">
                                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-default btn-sm">
                                                    <i class="fa fa-info"></i>
                                                    - {{ $student->id }}
                                                </button>
                                            </a>
                                        </td>
                                        <td>{{ $student->fisrtname }}</td>
                                        <td>{{ $student->lastname }}</td>
                                        <td>{{ $student->alumnocode }}</td>
                                        <td>{{ $student->created_at }}</td>
                                        <td class="actions-hover actions-fade">
                                            <a>
                                                <form action = "{{ route('students.destroy', $student->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type = "hidden" name = "_method" value = "DELETE">
                                                    <button type="submit" class="mb-xs mt-xs mr-xs btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</button>
                                                </form>
                                            </a>

                                            <a href="{{ route('students.edit', $student->id) }}">
                                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-warning btn-xs"><i class="fa fa-pencil"></i>Editar</button>
                                            </a>
                                        </td>
                                    <tr></tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h2>No hay estudiantes por favor agrega alguno.</h2>
                    @endif
                </div>
            </section>
        </div>
    </div>

@endsection
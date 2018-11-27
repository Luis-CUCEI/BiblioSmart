@extends('layouts.theme')
@section('content')

    <header class="page-header">
        <h2>Carreras</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ url('#') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Dashboard / Carreras / Mostrar</span></li>
            </ol>

            <a class="sidebar-right-toggle" ><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"> CUCEI - Carreras</h2>
                </header>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-none">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Division</th>
                                <th>Fecha de Registro</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($degrees as $degree)
                                <tr>
                                    <td>
                                        <a href="{{ route('degrees.show', $degree->id) }}">
                                            <button type="button" class="mb-xs mt-xs mr-xs btn btn-default btn-sm">
                                                <i class="fa fa-info"></i>
                                                - {{ $degree->id }}
                                            </button>
                                        </a>
                                    </td>
                                    <td>{{ $degree->career }}</td>
                                    <td>{{ $degree->division->name }}</td>
                                    <td>{{ $degree->created_at }}</td>
                                    <td class="actions-hover actions-fade">
                                        <a>
                                            <form action = "{{ route('degrees.destroy', $degree->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type = "hidden" name = "_method" value = "DELETE">
                                                <button type="submit" class="mb-xs mt-xs mr-xs btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</button>
                                            </form>
                                        </a>

                                        <a href="{{ route('degrees.edit', $degree->id) }}">
                                            <button type="button" class="mb-xs mt-xs mr-xs btn btn-warning btn-xs"><i class="fa fa-pencil"></i>Editar</button>
                                        </a>
                                    </td>
                                <tr></tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>

    </div>

@endsection
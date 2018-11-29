@extends('layouts.theme')
@section('content')

    <header class="page-header">
        <h2>Divisiones</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ url('#') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Dashboard / Divisiones / Mostrar</span></li>
            </ol>

            <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-featured panel-featured-dark">
                <header class="panel-heading">
                    <h2 class="panel-title"> CUCEI - Divisiones</h2>
                    <div class="panel-actions">
                        <a href="{{ route('divisions.create') }}" class="fa fa-plus"></a>
                    </div>
                </header>
                <div class="panel-body">
                    @if($divisions->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover mb-none">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Fecha de Registro</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($divisions as $division)
                                    <tr>
                                        <td>
                                            <a href="{{ route('divisions.show', $division->id) }}">
                                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-default btn-sm">
                                                    <i
                                                            class="fa fa-info"></i> - {{ $division->id }}</button>
                                            </a>
                                        </td>
                                        <td>{{ $division->name }}</td>
                                        <td>{{ $division->created_at }}</td>
                                        <td class="actions-hover actions-fade">
                                            <a>
                                                <form action="{{ route('divisions.destroy', $division->id) }}"
                                                      method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit"
                                                            class="mb-xs mt-xs mr-xs btn btn-danger btn-xs"><i
                                                                class="fa fa-trash-o"></i>Eliminar
                                                    </button>
                                                </form>
                                            </a>

                                            <a href="{{ route('divisions.edit', $division->id) }}">
                                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-warning btn-xs">
                                                    <i
                                                            class="fa fa-pencil"></i>Editar
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-dark">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <strong>Sin Divisiones</strong> Por favor, agrega algunas para continuar! <a href="{{ route('divisions.create') }}" class="alert-link"> Agregar Divisiones o pulsa la cruz que se encuentra arriba</a>.
                        </div>
                    @endif
                </div>
            </section>
        </div>
    </div>

@endsection
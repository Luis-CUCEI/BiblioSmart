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
                @if(isset($tdegrees))
                    <li><span>Dashboard / Carreras / Basura</span></li>
                @else
                    <li><span>Dashboard / Carreras / Mostrar</span></li>
                @endif
            </ol>

            <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-featured panel-featured-dark">
                <header class="panel-heading">
                    <h2 class="panel-title"> CUCEI - Carreras</h2>
                    <div class="panel-actions">
                        <a href="{{ route('degrees.create') }}" class="fa fa-plus"></a>
                    </div>
                </header>
                <div class="panel-body">
                    @if(isset($degrees) || isset($tdegrees))
                        <div class="table-responsive">
                            <table class="table table-hover mb-none" id="degrees">
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
                                @if(isset($tdegrees))
                                    @foreach($tdegrees as $degree)
                                        <tr>
                                            <td>{{ $degree->id }}</td>
                                            <td>{{ $degree->career }}</td>
                                            <td>{{ $degree->division->name }}</td>
                                            <td>{{ $degree->created_at }}</td>
                                            <td class="actions-hover actions-fade">
                                                <a>
                                                    <form action="{{ route('degrees.retrieve') }}"
                                                          method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$degree->id}}">
                                                        <button type="submit"
                                                                class="mb-xs mt-xs mr-xs btn btn-success btn-xs"><i
                                                                    class="fa fa-refresh"></i> Recuperar
                                                        </button>
                                                    </form>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    @foreach($degrees as $degree)
                                        <tr>
                                            <td>
                                                <a class="btn btn-sm btn-default"
                                                   href="{{ route('degrees.show', $degree->id) }}">{{ $degree->id }}</a>
                                            </td>
                                            <td>{{ $degree->career }}</td>
                                            <td>{{ $degree->division->name }}</td>
                                            <td>{{ $degree->created_at }}</td>
                                            <td class="actions-hover actions-fade">
                                                <a>
                                                    <form action="{{ route('degrees.destroy', $degree->id) }}"
                                                          method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit"
                                                                class="mb-xs mt-xs mr-xs btn btn-danger btn-xs"><i
                                                                    class="fa fa-trash-o"></i> Eliminar
                                                        </button>
                                                    </form>
                                                </a>

                                                <a href="{{ route('degrees.edit', $degree->id) }}">
                                                    <button type="button"
                                                            class="mb-xs mt-xs mr-xs btn btn-warning btn-xs">
                                                        <i
                                                                class="fa fa-pencil"></i> Editar
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    @else
                        @if(isset($degrees))
                            <div class="alert alert-dark">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>Sin Carreras</strong> Por favor, agrega algunas para continuar! <a
                                        href="{{ route('degrees.create') }}" class="alert-link"> Agregar Carreras o
                                    pulsa la
                                    cruz que se encuentra arriba</a>.
                            </div>
                        @endif
                        @if(isset($tdegrees))
                            <div class="alert alert-dark">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>Sin Carreras</strong> Por favor, borra algunas para continuar! <a
                                        href="{{ route('degrees.create') }}" class="alert-link"> Agregar Carreras o
                                    pulsa la
                                    cruz que se encuentra arriba</a>.
                            </div>
                        @endif
                    @endif
                </div>
            </section>
        </div>
    </div>

@endsection

@section('js')
    <link rel="stylesheet" type="text/css" href="{{ asset('js/datatable/datatables.min') }}"/>
    <script type="text/javascript" src="{{asset('js/datatable/datatables.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#degrees').DataTable();
        });
    </script>
@stop
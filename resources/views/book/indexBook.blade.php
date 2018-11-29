@extends('layouts.theme')
@section('content')

    <header class="page-header">
        <h2>Libros</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ url('#') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Dashboard / Libros / Mostrar</span></li>
            </ol>

            <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-featured panel-featured-dark">
                <header class="panel-heading">
                    <h2 class="panel-title"> CUCEI - Libros</h2>
                    <div class="panel-actions">
                        <a href="{{ route('books.create') }}" class="fa fa-plus"></a>
                    </div>
                </header>
                <div class="panel-body">
                    @if($books->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover mb-none">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titulo</th>
                                    <th>Division</th>
                                    <th>Carrera</th>
                                    <th>Clasificacion</th>
                                    <th>Fecha de Registro</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($books as $book)
                                    <tr>
                                        <td>
                                            <a href="{{ route('books.show', $book->id) }}">
                                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-default btn-sm">
                                                    <i class="fa fa-info"></i>
                                                    - {{ $book->id }}
                                                </button>
                                            </a>
                                        </td>
                                        <td>{{ $book->tittle }}</td>
                                        <td>{{ $book->division->name }}</td>
                                        <td>{{ $book->degree->career }}</td>
                                        <td>{{ $book->classification }}</td>
                                        <td>{{ $book->created_at }}</td>
                                        <td class="actions-hover actions-fade">
                                            <a>
                                                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit"
                                                            class="mb-xs mt-xs mr-xs btn btn-danger btn-xs"><i
                                                                class="fa fa-trash-o"></i>Eliminar
                                                    </button>
                                                </form>
                                            </a>

                                            <a href="{{ route('books.edit', $book->id) }}">
                                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-warning btn-xs">
                                                    <i class="fa fa-pencil"></i>Editar
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
                            <strong>Sin Libros</strong> Por favor, agrega algunos para continuar! <a
                                    href="{{ route('books.create') }}" class="alert-link"> Agregar Libros o pulsa la
                                cruz que se encuentra arriba</a>.
                        </div>
                    @endif
                </div>
            </section>
        </div>
    </div>

@endsection
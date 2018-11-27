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

            <a class="sidebar-right-toggle" ><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"> CUCEI - Libros</h2>
                </header>
                <div class="panel-body">
                    @if(isset($books))
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
                                                <form action = "{{ route('books.destroy', $book->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type = "hidden" name = "_method" value = "DELETE">
                                                    <button type="submit" class="mb-xs mt-xs mr-xs btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</button>
                                                </form>
                                            </a>

                                            <a href="{{ route('books.edit', $book->id) }}">
                                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-warning btn-xs"><i class="fa fa-pencil"></i>Editar</button>
                                            </a>
                                        </td>
                                    <tr></tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h2>NO Existen Libros</h2>
                    @endif
                </div>
            </section>
        </div>
    </div>

@endsection
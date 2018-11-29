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
                <li><span>Dashboard / Carreras / Mostrar / {{$degree->id}}</span></li>
            </ol>

            <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"> Carrera de {{$degree->career}} </h2>
                </header>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-none">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Division</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $degree->division->id }}</td>
                                <td>{{ $degree->division->name }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <a href="{{ route('degrees.index') }}">
                <button type="button" class="mb-xs mt-xs mr-xs btn btn-success btn-block"><i
                            class="fa fa-angle-double-left"></i> Regresar
                </button>
            </a>
        </div>
    </div>

@endsection
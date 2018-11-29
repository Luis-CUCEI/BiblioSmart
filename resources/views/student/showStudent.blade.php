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
                <li><span>Dashboard / Estudiante / Mostrar / {{$student->id}}</span></li>
            </ol>

            <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-featured panel-featured-primary">
                <header class="panel-heading">
                    <h2 class="panel-title"> Estudiante - {{$student->fisrtname}} {{$student->lastname}} </h2>
                </header>
                <div class="panel-body">
                    {!! Form::model($student, ['route'=>['students.index'], 'method'=>'get', 'class'=>'form-horizontal form-bordered' ]) !!}
                    <div class="form-group">
                        <label class="col-md-3 control-label">E-Mail</label>
                        <div class="col-md-6">
                            <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-info"></i></span>
                                    </span>
                                {!! Form::text('email', null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Codigo de Alumno</label>
                        <div class="col-md-6">
                            <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-info"></i></span>
                                    </span>
                                {!! Form::text('alumnocode', null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Numero de Telefono</label>
                        <div class="col-md-6">
                            <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-info"></i></span>
                                    </span>
                                {!! Form::text('phonenumber', null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Genero</label>
                        <div class="col-md-6">
                            <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-info"></i></span>
                                    </span>
                                {!! Form::select('gender', ['M'=>'Masculino', 'F'=>'Femenino', 'Otro'=>'Otro'], null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Cuenta confirmada</label>
                        <div class="col-md-6">
                            <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-info"></i></span>
                                    </span>
                                {!! Form::select('gender', [0=>'No Confirmada', 1=>'Confirmada'], null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </section>

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel panel-featured panel-dark">
                        <header class="panel-heading">
                            <h2 class="panel-title"> Agregar Libros a
                                Estudiante {{$student->fisrtname}} {{$student->lastname}} </h2>
                        </header>
                        <div class="panel-body">
                            {!! Form::open(['route'=>'students.addbook','class'=>'form-horizontal form-bordered', 'method'=>'POST']) !!}

                            <div class="form-group">
                                {!! Form::label('book_id', 'Libro: ', ['class'=>'col-md-3 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::select('book_id', [0=>'<-- Selecciona una Libro -->']+$books_list, null, ['class'=>'form-control input-rounded']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('school_cycle', 'Ciclo Escolar: ', ['class'=>'col-md-3 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::select('school_cycle', ['2018A'=>'2018A','2018B'=>'2018B', '2019A'=>'2019A', '2019B'=>'2019B'], null, ['class'=>'form-control input-rounded']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('delivery_at', 'Dia y Hora de Entrega: ', ['class'=>'col-md-3 control-label']) !!}
                                <div class="col-md-6">
                                    {{ Form::input('dateTime-local', 'delivery_at', null, ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    {!! Form::token() !!}
                                    {!! Form::hidden('student_id', $student->id) !!}
                                    {!! Form::submit('Registrar Libro a Alumno', ['class'=>'btn btn-warning btn-block']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel panel-featured panel-warning">
                        <header class="panel-heading">
                            <h2 class="panel-title"> Mis Libros {{$student->full_name}} </h2>
                        </header>
                        <div class="panel-body">
                            @if(isset($student->books))
                                <div class="table-responsive">
                                    <table class="table table-hover mb-none" id="students">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Titulo</th>
                                            <th>Ciclo Escolar</th>
                                            <th>Fecha y Hora de entrega</th>
                                            <th>Fecha de salida</th>
                                            <th>Entregado</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($student->books as $book)
                                            <tr>
                                                <td>{{ $book->id }}</td>
                                                <td>{{ $book->tittle }}</td>
                                                <td>{{ $book->pivot->school_cycle }}</td>
                                                <td>{{ $book->pivot->delivery_at }}</td>
                                                <td>{{ $book->pivot->created_at }}</td>
                                                <th>{{ $book->pivot->delivery }}</th>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="alert alert-dark">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <strong>Sin Libros</strong> Por favor, agrega algunos para continuar!
                                </div>
                            @endif
                        </div>
                    </section>
                </div>
            </div>

            <a href="{{ route('students.index') }}">
                <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary btn-block"><i
                            class="fa fa-angle-double-left"></i> Regresar
                </button>
            </a>
        </div>
    </div>

@endsection
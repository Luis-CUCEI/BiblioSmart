@extends('layouts.theme')
@section('content')

    <header class="page-header">
        <h2>Estudiante</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ url('#') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                @if(isset($student))
                    <li><span>Dashboard / Estudiantes / Editar</span></li>
                @else
                    <li><span>Dashboard / Estudiantes / Registro</span></li>
                @endif
            </ol>

            <a class="sidebar-right-toggle" ><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>{{ $error }}</strong>
            </div>
        @endforeach
    @endif

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"> Datos de Estudiante </h2>
                </header>
                <div class="panel-body">
                    @if(isset($student))
                        {!! Form::model($student, ['route'=>['students.update', $student->id], 'method'=>'PATCH', 'class'=>'form-horizontal form-bordered' ]) !!}
                    @else
                        {!! Form::open(['route'=>'students.store', 'class'=>'form-horizontal form bordered']) !!}
                    @endif

                    <div class="form-group">
                        {!! Form::label('fisrtname', 'Nombre: ', ['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('fisrtname', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa nombre del estudiante.']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('lastname', 'Apellidos: ', ['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('lastname', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa apellidos del estudiante.']) !!}
                        </div>
                    </div>

                        @if(!isset($student))
                            <div class="form-group">
                                {!! Form::label('password', 'Contraseña: ', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa la contraseña del estudiante.']) !!}
                            </div>
                            </div>
                        @endif

                    <div class="form-group">
                        {!! Form::label('email', 'Correo: ', ['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::email('email', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa el correo del estudiante.']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('alumnocode', 'Codigo de Alumno: ', ['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('alumnocode', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa codigo de estudiante']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('phonenumber', 'Numero de Telefono: ', ['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('phonenumber', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa numero de telefono.']) !!}
                        </div>
                    </div>

                        <div class="form-group">
                            {!! Form::label('gender', 'genero: ', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('gender', ['M'=>'Masculino', 'F'=>'Femenino', 'Otro'=>'Otro'], null, ['class'=>'form-control input-rounded']) !!}
                            </div>
                        </div>

                    <div class="form-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            {!! Form::token() !!}
                            @if(isset($student))
                                {!! Form::submit('Actualizar Estudiante', ['class'=>'btn btn-warning btn-block']) !!}
                            @else
                                {!! Form::hidden('confirmedaccount', '0') !!}
                                {!! Form::submit('Registrar Estudiante', ['class'=>'btn btn-success btn-block']) !!}
                            @endif
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </section>
        </div>
    </div>

@endsection
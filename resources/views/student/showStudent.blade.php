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

            <a class="sidebar-right-toggle" ><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-featured panel-featured-success">
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
                    </form>
                </div>
            </section>
            <a href="{{ route('students.index') }}">
                <button type="button" class="mb-xs mt-xs mr-xs btn btn-success btn-block"><i class="fa fa-angle-double-left"></i> Regresar</button>
            </a>
        </div>
    </div>

@endsection
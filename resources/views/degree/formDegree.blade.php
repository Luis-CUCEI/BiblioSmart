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
                @if(isset($degree))
                    <li><span>Dashboard / Carreras / Editar</span></li>
                @else
                    <li><span>Dashboard / Carreras / Registro</span></li>
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
                    <h2 class="panel-title"> Datos de Carreras </h2>
                </header>
                <div class="panel-body">
                    @if(isset($degree))
                        {!! Form::model($degree, ['route'=>['degrees.update', $degree->id], 'method'=>'PATCH', 'class'=>'form-horizontal form-bordered' ]) !!}
                    @else
                        {!! Form::open(['route'=>'degrees.store', 'class'=>'form-horizontal form bordered']) !!}
                    @endif

                    <div class="form-group">
                        {!! Form::label('career', 'Nombre: ', ['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('career', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa nombre de la carrera']) !!}
                        </div>
                    </div>

                        <div class="form-group">
                            {!! Form::label('division_id', 'Division: ', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('division_id', [0=>'<-- Selecciona una division -->']+$divisions, null, ['class'=>'form-control input-rounded']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                {!! Form::token() !!}
                                @if(isset($degree))
                                    {!! Form::submit('Actualizar Carrera', ['class'=>'btn btn-warning btn-block']) !!}
                                @else
                                    {!! Form::submit('Registrar Carrera', ['class'=>'btn btn-success btn-block']) !!}
                                @endif
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </section>
        </div>
    </div>

@endsection
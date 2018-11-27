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
                @if(isset($division))
                    <li><span>Dashboard / Divisiones / Editar</span></li>
                @else
                    <li><span>Dashboard / Divisiones / Registro</span></li>
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
                    <h2 class="panel-title"> Datos de Division</h2>
                </header>
                <div class="panel-body">
                    @if(isset($division))
                        {!! Form::model($division, ['route'=>['divisions.update', $division->id], 'method'=> 'PATCH', 'class'=>'form-horizontal form-bordered']) !!}
                    @else
                        {!! Form::open(['route'=>'divisions.store','class'=>'form-horizontal form-bordered']) !!}
                    @endif
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Nombre: </label>
                        <div class="col-md-6">
                            {!! Form::text('name', null, ['class'=>'form-control input-rounded',
                            'placeholder'=>'Ingresa nombre de la materia.']) !!}
                        </div>
                        <div>
                            <input type="hidden" name="token" value="666">
                            @if(isset($division))
                                <input class="btn btn-warning" type="submit" value="Actualizar Division">
                            @else
                                <input class="btn btn-success" type="submit" value="Registrar Division">
                            @endif
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </section>
        </div>
    </div>

@endsection
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
                <li><span>Dashboard / Libros / Mostrar / {{$book->id}}</span></li>
            </ol>

            <a class="sidebar-right-toggle" ><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-featured panel-featured-success">
                <header class="panel-heading">
                    <h2 class="panel-title"> Libro - {{$book->tittle}} </h2>
                </header>
                <div class="panel-body">
                    {!! Form::model($book, ['route'=>['books.index'], 'method'=>'get', 'class'=>'form-horizontal form-bordered' ]) !!}
                        <div class="form-group">
                            <label class="col-md-3 control-label">Numero de Sistema</label>
                            <div class="col-md-6">
                                <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-info"></i></span>
                                    </span>
                                    {!! Form::text('n_system', null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">ISBN</label>
                            <div class="col-md-6">
                                <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-info"></i></span>
                                    </span>
                                    {!! Form::text('isbn', null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Paginas</label>
                            <div class="col-md-6">
                                <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-info"></i></span>
                                    </span>
                                    {!! Form::text('pages', null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Autor</label>
                            <div class="col-md-6">
                                <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-info"></i></span>
                                    </span>
                                    {!! Form::text('author', null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Tema</label>
                            <div class="col-md-6">
                                <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-info"></i></span>
                                    </span>
                                    {!! Form::text('theme', null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                                </div>
                            </div>
                        </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Existencias</label>
                        <div class="col-md-6">
                            <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-info"></i></span>
                                    </span>
                                {!! Form::text('copies', null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Codigo de Barras</label>
                        <div class="col-md-6">
                            <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-info"></i></span>
                                    </span>
                                {!! Form::text('bar_code', null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Clasificacion</label>
                        <div class="col-md-6">
                            <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-info"></i></span>
                                    </span>
                                {!! Form::text('classification', null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Division</label>
                        <div class="col-md-6">
                            <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-university"></i></span>
                                    </span>
                                {!! Form::select('division_id', [0=>'<-- Selecciona una division -->']+$divisions, null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Carrera</label>
                        <div class="col-md-6">
                            <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                        <span class="icon"><i class="fa fa-graduation-cap"></i></span>
                                    </span>
                                {!! Form::select('degree_id', [0=>'<-- Selecciona una carrera -->']+$degrees, null, ['class'=>'form-control input-rounded', 'readonly'=>'readonly']) !!}
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </section>
            <a href="{{ route('degrees.index') }}">
                <button type="button" class="mb-xs mt-xs mr-xs btn btn-success btn-block"><i class="fa fa-angle-double-left"></i> Regresar</button>
            </a>
        </div>
    </div>

@endsection
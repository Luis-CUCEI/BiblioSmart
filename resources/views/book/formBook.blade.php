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
                @if(isset($book))
                    <li><span>Dashboard / Libros / Editar</span></li>
                @else
                    <li><span>Dashboard / Libros / Registro</span></li>
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
                    <h2 class="panel-title"> Datos de Libro </h2>
                </header>
                <div class="panel-body">
                    @if(isset($book))
                        {!! Form::model($book, ['route'=>['books.update', $book->id], 'method'=>'PATCH', 'class'=>'form-horizontal form-bordered' ]) !!}
                    @else
                        {!! Form::open(['route'=>'books.store', 'class'=>'form-horizontal form bordered']) !!}
                    @endif

                    <div class="form-group">
                        {!! Form::label('tittle', 'Titulo: ', ['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('tittle', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa nombre del libro.']) !!}
                        </div>
                    </div>

                        <div class="form-group">
                            {!! Form::label('n_system', 'Numero de Sistema: ', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('n_system', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa Numero de Sistema.']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('isbn', 'ISBN: ', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('isbn', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa ISBN.']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('pages', 'Paginas: ', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('pages', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa Numero de Paginas.']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('author', 'Autor: ', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('author', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa nombre del autor']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('theme', 'Tema: ', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('theme', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa Tema del libro.']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('copies', 'Numero de Existencias: ', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('copies', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa numero de Existencias.']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('bar_code', 'Codigo de barras: ', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('bar_code', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa Codigo de barras.']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('classification', 'Clasificacion: ', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('classification', null, ['class'=>'form-control input-rounded', 'placeholder'=>'Ingresa Clasificacion.']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('division_id', 'Division: ', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('division_id', [0=>'<-- Selecciona una division -->']+$divisions, null, ['class'=>'form-control input-rounded']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('degree_id', 'Carrera: ', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('degree_id', [0=>'<-- Selecciona una carrera -->']+$degrees, null, ['class'=>'form-control input-rounded']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                {!! Form::token() !!}
                                @if(isset($book))
                                    {!! Form::submit('Actualizar Libro', ['class'=>'btn btn-warning btn-block']) !!}
                                @else
                                    {!! Form::submit('Registrar Libro', ['class'=>'btn btn-success btn-block']) !!}
                                @endif
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </section>
        </div>
    </div>

@endsection
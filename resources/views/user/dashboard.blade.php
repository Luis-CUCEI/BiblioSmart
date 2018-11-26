@extends('layouts.theme')
@section('content')

    <header class="page-header">
        <h2>Dashboard</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ url('#') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Dashboard</span></li>
            </ol>

            <a class="sidebar-right-toggle" ><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-6">
            <div class="panel-body">
                <div class="row" align="center">
                    <h2>Bienvenid@ a BliblioSmart CUCEI</h2>
                    <p> </p>
                </div>
            </div>
        </div>
    </div>

@endsection
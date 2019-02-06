@extends('adminlte::page')

@section('title', 'Genre - Edit')

@section('content_header')
    <h1>Editar Gênero</h1>
@stop

@section('content')
<a href="{{ url('/admin/genres') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
<br /><br />

<div class="container">
    <div class="col-md-9">
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ url('/admin/genres/' . $genre->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            @include ('admin.genres.form', ['formMode' => 'edit'])
        </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

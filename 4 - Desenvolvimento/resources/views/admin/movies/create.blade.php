@extends('adminlte::page')

@section('title', 'Movie - New')

@section('content_header')
    <h1>New Movie</h1>
@stop

@section('content')
<a href="{{ url('/admin/movies') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
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

        <form method="POST" action="{{ url('/admin/movies') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}

            @include ('admin.movies.form', ['formMode' => 'create'])
            <div class="form-group {{ $errors->has('genres_id') ? 'has-error' : ''}}">
                <label for="duration" class="control-label">{{ 'Genre' }}</label>
                <select class="form-control select2-multi" name="genres[]" multiple>
                    @foreach($genres as $genre)
                        <option value="{{ isset($genre->id) ? $genre->id : ''}}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

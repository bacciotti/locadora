@extends('adminlte::page')

@section('title', 'Filme - Ver')

@section('content_header')
    <h1>Filme</h1>
@stop

@section('content')
<a href="{{ url('/admin/movies') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
<a href="{{ url('/admin/movies/' . $movie->id . '/edit') }}" title="Editar Filme"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
<form method="POST" action="{{ url('admin/movies' . '/' . $movie->id) }}" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger btn-sm" title="Excluir Filme" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
</form>
<br/><br/>

<div class="container">
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th><td>{{ $movie->id }}</td>
                    </tr>
                    <tr><th>Título Nacional</th><td> {{ $movie->pt_br_tittle }} </td></tr>
                    <tr><th>Título Original</th><td> {{ $movie->original_title }} </td></tr>
                    <tr><th>Sinopse</th><td> {{ $movie->sinopse }} </td></tr>
                    <tr><th>Duração</th><td> {{ $movie->duration }} </td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

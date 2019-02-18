@extends('layouts.app')

@section('title', 'Filme - Ver')

@section('content_header')
    <h1>Filme</h1>
@stop

@section('content')
<a href="{{ url('/movies') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
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
                    <tr><th>Ano</th><td> {{ $movie->year }} </td></tr>
                    <tr><th>País</th><td> {{ $movie->countries }} </td></tr>
                    <tr><th>Diretor</th><td> {{ $movie->director }} </td></tr>
                    <tr><th>Elenco</th><td> {{ $movie->cast }} </td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

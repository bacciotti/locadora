@extends('layouts.app')

@section('title', 'Filmes')

@section('content_header')
    <h1>Filmes</h1>
@stop

@section('content')
<form class="form-inline" method="GET" action="{{ url('/movies') }}" accept-charset="UTF-8" role="search">
    <input type="text" class="form-control" name="search" placeholder="Pesquisar..." value="{{ request('search') }}">
    <button class="btn btn-secondary" type="submit">PESQUISAR</button>
</form>
<br/><br/>

    @foreach($movies as $item)
    <a href="{{ url('/movies/' . $item->id) }}" title="Ver Filme">
        <button class="btn btn-info btn-sm">
            <table class="table">
                <thead>
                    <tr>
                        <td>{{ isset($item->pt_br_tittle) ? $item->pt_br_tittle : $item->original_title }} ({{ $item->duration }})</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $item->sinopse }}</td>
                    </tr>
                </tbody>
            </table>
        </button>
    </a>
    @endforeach

    <div class="pagination-wrapper"> {!! $movies->appends(['search' => Request::get('search')])->render() !!} </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

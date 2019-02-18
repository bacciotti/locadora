@extends('adminlte::page')

@section('title', 'Filmes')

@section('content_header')
    <h1>Filmes</h1>
@stop

@section('content')
<a href="{{ url('/admin/movies/create') }}" class="btn btn-success btn-sm" title="Adiconar Novo Filme"><i class="fa fa-plus" aria-hidden="true"></i> Adiconar Novo</a>
<form method="GET" action="{{ url('/admin/movies') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search" style="display: inline-flex;">
    <input type="text" class="form-control" name="search" placeholder="Pesquisar..." value="{{ request('search') }}">
    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
</form>
<br/><br/>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Título Nacional</th>
                <th>Título Original</th>
                <th>Sinopse</th>
                <th>Duração</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($movies as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->pt_br_tittle }}</td>
                <td>{{ $item->original_title }}</td>
                <td>{{ $item->sinopse }}</td>
                <td>{{ $item->duration }}</td>
                <td>
                    <a href="{{ url('/admin/movies/' . $item->id) }}" title="Ver Filme"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                    <a href="{{ url('/admin/movies/' . $item->id . '/edit') }}" title="Editar Filme"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                    <form method="POST" action="{{ url('/admin/movies' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Excluir Filme" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $movies->appends(['search' => Request::get('search')])->render() !!} </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

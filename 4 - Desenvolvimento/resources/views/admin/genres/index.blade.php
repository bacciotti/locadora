@extends('adminlte::page')

@section('title', 'Gêneros')

@section('content_header')
    <h1>Gêneros</h1>
@stop

@section('content')
<a href="{{ url('/admin/genres/create') }}" class="btn btn-success btn-sm" title="Adiconar Novo Gênero"><i class="fa fa-plus" aria-hidden="true"></i> Adiconar Novo</a>
<form method="GET" action="{{ url('/admin/genres') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search" style="display: inline-flex;">
    <input type="text" class="form-control" name="search" placeholder="Pesquisar..." value="{{ request('search') }}">
    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
</form>
<br/><br/>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Nome</th><th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($genres as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="{{ url('/admin/genres/' . $item->id . '/edit') }}" title="Editar Gênero"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                    <form method="POST" action="{{ url('/admin/genres' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Excluir Gênero" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $genres->appends(['search' => Request::get('search')])->render() !!} </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@extends('adminlte::page')

@section('title', 'Itens')

@section('content_header')
    <h1>Itens</h1>
@stop

@section('content')
<a href="{{ url('/admin/itens/create') }}" class="btn btn-success btn-sm" title="Adiconar Novo Item"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar Novo</a>
<form class="form-inline my-2 my-lg-0 float-right" style="display:inline-flex" method="GET" action="{{ url('/admin/itens') }}" accept-charset="UTF-8" role="search">
    <input type="text" class="form-control" name="search" placeholder="Pesquisar..." value="{{ request('search') }}">
    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
</form>
<br/><br/>
        
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Filme</th>
                <th>Tipo de Mídia</th>
                <th>Numero Serial</th>
                <th>Distribuidor</th>
                <th>Data de Aquisição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($itens as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->movie_id }}</td>
                <td>{{ $item->media_type_id }}</td>
                <td>{{ $item->serial_number }}</td>
                <td>{{ $item->distributor_id }}</td>
                <td>{{ $item->date_acquisition }}</td>
                <td>
                    <a href="{{ url('/admin/itens/' . $item->id) }}" title="Ver Item"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                    <a href="{{ url('/admin/itens/' . $item->id . '/edit') }}" title="Editar Item"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                    <form method="POST" action="{{ url('/admin/itens' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Excluir Iten" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $itens->appends(['search' => Request::get('search')])->render() !!} </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

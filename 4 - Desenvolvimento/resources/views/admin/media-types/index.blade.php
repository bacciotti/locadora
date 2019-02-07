@extends('adminlte::page')

@section('title', ' - Tipos de Mídias')

@section('content_header')
    <h1>Tipos de Mídias</h1>
@stop

@section('content')
<a href="{{ url('/admin/media-types/create') }}" class="btn btn-success btn-sm" title="Add New MediaType">
    <i class="fa fa-plus" aria-hidden="true"></i> Adicionar Novo
</a>
<form method="GET" action="{{ url('/admin/media-types') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search" style="display: inline-flex;">
    <input type="text" class="form-control" name="search" placeholder="Pesquisar" value="{{ request('search') }}">
    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
</form>

<br/><br/>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Descrição</th><th>Preço</th><th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mediatypes as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td><td>{{ $item->price }}</td>
                <td>
                    <a href="{{ url('/admin/media-types/' . $item->id) }}" title="View MediaType"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                    <a href="{{ url('/admin/media-types/' . $item->id . '/edit') }}" title="Edit MediaType"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                    <form method="POST" action="{{ url('/admin/media-types' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete MediaType" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $mediatypes->appends(['search' => Request::get('search')])->render() !!} </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

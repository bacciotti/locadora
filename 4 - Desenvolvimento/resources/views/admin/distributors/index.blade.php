@extends('adminlte::page')

@section('title', 'Distribuidores')

@section('content_header')
    <h1>Distribuidores</h1>
@stop

@section('content')
<a href="{{ url('/admin/distributors/create') }}" class="btn btn-success btn-sm" title="Adiconar Novo Distribuidor"><i class="fa fa-plus" aria-hidden="true"></i> Adiconar Novo</a>
<form class="form-inline my-2 my-lg-0 float-right" style="display:inline-flex" method="GET" action="{{ url('/admin/distributors') }}" accept-charset="UTF-8" role="search">
    <input type="text" class="form-control" name="search" placeholder="Pesquisar..." value="{{ request('search') }}">
    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
</form>
<br/><br/>
        
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Razão Social</th>
                <th>CNPJ</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($distributors as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->corporate_name }}</td><td>{{ $item->cnpj }}</td><td>{{ $item->address }}</td>
                <td>
                    <a href="{{ url('/admin/distributors/' . $item->id) }}" title="Ver Distribuidor"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                    <a href="{{ url('/admin/distributors/' . $item->id . '/edit') }}" title="Editar Distribuidor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                    <form method="POST" action="{{ url('/admin/distributors' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Excluir Distribuidor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $distributors->appends(['search' => Request::get('search')])->render() !!} </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

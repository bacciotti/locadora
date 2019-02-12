@extends('adminlte::page')

@section('title', 'Leasings')

@section('content_header')
    <h1>Leasings</h1>
@stop

@section('content')
<a href="{{ url('/admin/leasings/create') }}" class="btn btn-success btn-sm" title="Adiconar Novo Leasing"><i class="fa fa-plus" aria-hidden="true"></i> Adiconar Novo</a>
<form class="form-inline my-2 my-lg-0 float-right" style="display:inline-flex" method="GET" action="{{ url('/admin/leasings') }}" accept-charset="UTF-8" role="search">
    <input type="text" class="form-control" name="search" placeholder="Pesquisar..." value="{{ request('search') }}">
    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
</form>
<br/><br/>
        
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Date Time Leasing</th><th>Date Time Devolution</th><th>User Id</th><th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($leasings as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->date_time_leasing }}</td><td>{{ $item->date_time_devolution }}</td><td>{{ $item->user_id }}</td>
                <td>
                    <a href="{{ url('/admin/leasings/' . $item->id) }}" title="Ver Leasing"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                    <a href="{{ url('/admin/leasings/' . $item->id . '/edit') }}" title="Editar Leasing"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                    <form method="POST" action="{{ url('/admin/leasings' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Excluir Leasing" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $leasings->appends(['search' => Request::get('search')])->render() !!} </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

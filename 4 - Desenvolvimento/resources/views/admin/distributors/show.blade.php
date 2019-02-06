@extends('adminlte::page')

@section('title', 'Distributor - View')

@section('content_header')
    <h1>Distributor</h1>
@stop

@section('content')
<a href="{{ url('/admin/distributors') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
<a href="{{ url('/admin/distributors/' . $distributor->id . '/edit') }}" title="Edit Distributor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
<form method="POST" action="{{ url('admin/distributors' . '/' . $distributor->id) }}" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger btn-sm" title="Delete Distributor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
</form>
<br/><br/>

<div class="container">
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th><td>{{ $distributor->id }}</td>
                    </tr>
                    <tr><th> Nome Corporativo </th><td> {{ $distributor->corporate_name }} </td></tr><tr><th> CNPJ </th><td> {{ $distributor->cnpj }} </td></tr><tr><th> Endereço </th><td> {{ $distributor->address }} </td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

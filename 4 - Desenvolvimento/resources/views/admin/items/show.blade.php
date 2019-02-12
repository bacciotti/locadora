@extends('adminlte::page')

@section('title', 'Item - Ver')

@section('content_header')
    <h1>Item</h1>
@stop

@section('content')
<a href="{{ url('/admin/items') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
<a href="{{ url('/admin/items/' . $item->id . '/edit') }}" title="Editar Item"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
<form method="POST" action="{{ url('admin/items' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger btn-sm" title="Excluir Item" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
</form>
<br/><br/>

<div class="container">
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th><td>{{ $item->id }}</td>
                    </tr>
                    <tr><th>Filme</th><td> {{ $item->movie_id }} </td></tr>
                    <tr><th>Tipo de Mídia</th><td> {{ $item->media_type_id }} </td></tr>
                    <tr><th>Número Serial</th><td> {{ $item->serial_number }} </td></tr>
                    <tr><th>Distribuidor</th><td> {{ $item->distributor_id }} </td></tr>
                    <tr><th>Data de Aquisição</th><td> {{ $item->date_acquisition }} </td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

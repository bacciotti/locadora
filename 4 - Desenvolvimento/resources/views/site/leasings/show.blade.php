@extends('adminlte::page')

@section('title', 'Leasing - Ver')

@section('content_header')
    <h1>Leasing</h1>
@stop

@section('content')
<a href="{{ url('/admin/leasings') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
<a href="{{ url('/admin/leasings/' . $leasing->id . '/edit') }}" title="Editar Leasing"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
<form method="POST" action="{{ url('admin/leasings' . '/' . $leasing->id) }}" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger btn-sm" title="Excluir Leasing" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
</form>
<br/><br/>

<div class="container">
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th><td>{{ $leasing->id }}</td>
                    </tr>
                    <tr><th> Date Time Leasing </th><td> {{ $leasing->date_time_leasing }} </td></tr><tr><th> Date Time Devolution </th><td> {{ $leasing->date_time_devolution }} </td></tr><tr><th> User Id </th><td> {{ $leasing->user_id }} </td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@extends('adminlte::page')

@section('title', 'Payment - Ver')

@section('content_header')
    <h1>Payment</h1>
@stop

@section('content')
<a href="{{ url('/admin/payments') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
<a href="{{ url('/admin/payments/' . $payment->id . '/edit') }}" title="Editar Payment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
<form method="POST" action="{{ url('admin/payments' . '/' . $payment->id) }}" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger btn-sm" title="Excluir Payment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
</form>
<br/><br/>

<div class="container">
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th><td>{{ $payment->id }}</td>
                    </tr>
                    <tr><th> Type </th><td> {{ $payment->type }} </td></tr><tr><th> Date Time </th><td> {{ $payment->date_time }} </td></tr><tr><th> Value </th><td> {{ $payment->value }} </td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

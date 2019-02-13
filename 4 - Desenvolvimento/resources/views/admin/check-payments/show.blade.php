@extends('adminlte::page')

@section('title', 'CheckPayment - Ver')

@section('content_header')
    <h1>CheckPayment</h1>
@stop

@section('content')
<a href="{{ url('/admin/check-payments') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
<a href="{{ url('/admin/check-payments/' . $checkpayment->id . '/edit') }}" title="Editar CheckPayment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
<form method="POST" action="{{ url('admin/checkpayments' . '/' . $checkpayment->id) }}" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger btn-sm" title="Excluir CheckPayment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
</form>
<br/><br/>

<div class="container">
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th><td>{{ $checkpayment->id }}</td>
                    </tr>
                    <tr><th> Payment Id </th><td> {{ $checkpayment->payment_id }} </td></tr><tr><th> Bank </th><td> {{ $checkpayment->bank }} </td></tr><tr><th> Agency </th><td> {{ $checkpayment->agency }} </td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

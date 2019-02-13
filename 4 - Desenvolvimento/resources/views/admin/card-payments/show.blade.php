@extends('adminlte::page')

@section('title', 'CardPayment - Ver')

@section('content_header')
    <h1>CardPayment</h1>
@stop

@section('content')
<a href="{{ url('/admin/card-payments') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
<a href="{{ url('/admin/card-payments/' . $cardpayment->id . '/edit') }}" title="Editar CardPayment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
<form method="POST" action="{{ url('admin/cardpayments' . '/' . $cardpayment->id) }}" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger btn-sm" title="Excluir CardPayment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
</form>
<br/><br/>

<div class="container">
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th><td>{{ $cardpayment->id }}</td>
                    </tr>
                    <tr><th> Payment Id </th><td> {{ $cardpayment->payment_id }} </td></tr><tr><th> Company </th><td> {{ $cardpayment->company }} </td></tr><tr><th> Number </th><td> {{ $cardpayment->number }} </td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@extends('adminlte::page')

@section('title', 'Booking - Ver')

@section('content_header')
    <h1>Booking</h1>
@stop

@section('content')
<a href="{{ url('/admin/bookings') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
<a href="{{ url('/admin/bookings/' . $booking->id . '/edit') }}" title="Editar Booking"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
<form method="POST" action="{{ url('admin/bookings' . '/' . $booking->id) }}" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger btn-sm" title="Excluir Booking" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
</form>
<br/><br/>

<div class="container">
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th><td>{{ $booking->id }}</td>
                    </tr>
                    <tr><th> Date Time </th><td> {{ $booking->date_time }} </td></tr><tr><th> User Id </th><td> {{ $booking->user_id }} </td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

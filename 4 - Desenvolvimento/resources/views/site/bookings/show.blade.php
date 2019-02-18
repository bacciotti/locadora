@extends('layouts.app')

@section('title', 'Reserva - Ver')

@section('content_header')
    <h1>Reserva</h1>
@stop

@section('content')
<a href="{{ url('/bookings') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
<br/><br/>

<div class="container">
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th><td>{{ $booking->id }}</td>
                    </tr>
                    <tr><th> Usuário </th><td> {{ $booking->user_id }} </td></tr>
                    <tr><th> Date </th><td> {{ $booking->date }} </td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

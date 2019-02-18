@extends('layouts.app')

@section('title', 'Reservas')

@section('content_header')
    <h1>Reservas</h1>
@stop

@section('content')
<form class="form-inline" method="GET" action="{{ url('/bookings') }}" accept-charset="UTF-8" role="search">
    <input type="text" class="form-control" name="search" placeholder="Pesquisar..." value="{{ request('search') }}">
    <button class="btn btn-secondary" type="submit">PESQUISAR</button>
</form>
<br/><br/>
        
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Usuário</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bookings as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ date( 'd/m/Y' , strtotime($item->date)) }}</td>
                <td>
                    <a href="{{ url('/bookings/' . $item->id) }}" title="Ver Booking"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $bookings->appends(['search' => Request::get('search')])->render() !!} </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

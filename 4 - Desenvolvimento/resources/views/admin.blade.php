@extends('adminlte::page')

@section('title', 'Painel de Controle')

@section('content_header')
    <h1>Painel de Controle</h1>
@stop

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <p>Seja bem vindo ao painel administrativo da Locadora Imperial.</p>
    <b>Você está logado!</b>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>console.log('Admin: Painel de Controle aberto!');</script>
@stop
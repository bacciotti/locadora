@extends('adminlte::page')

@section('title', 'Meu Perfil')

@section('content_header')
    <h1>Meu Perfil</h1>
@stop

@section('content')
    <?php $icon = Icon::create('save');?>
    {!! form($form->add('insert','submit', [
        'attr' => ['class' => 'btn btn-primary btn-block'],
        'label' => $icon . ' Salvar'
    ]))
    !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

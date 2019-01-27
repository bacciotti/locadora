@extends('adminlte::page')

@section('title', 'Alterar Usuário')

@section('content_header')
    <h1>Alterar Usuário</h1>
@stop

@section('content')
    @component('admin.users.tabs',['user' => $form->getModel()])
        <?php $icon = Icon::create('save');?>
        {!!
            form($form->add('edit', 'submit', [
                'attr' => ['class' => 'btn btn-primary btn-block'],
                'label' => $icon . ' Salvar'
            ]))
        !!}
    @endcomponent
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

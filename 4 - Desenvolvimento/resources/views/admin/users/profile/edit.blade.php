@extends('adminlte::page')

@section('title', 'Usuário - Editar')

@section('content_header')
    <h1>Editar Usuário</h1>
@stop

@section('content')
    {!! Button::warning('<i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar')->asLinkTo(route('admin.users.index'))->addAttributes(['class' => "btn-sm"]) !!}
    <br/><br/>
    @component('admin.users.tabs',['user' => $form->getModel()])
        <br/>
        <?php $icon = Icon::create('cloud-upload');?>
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

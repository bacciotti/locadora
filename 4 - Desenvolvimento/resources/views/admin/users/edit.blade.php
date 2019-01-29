@extends('adminlte::page')

@section('title', 'User - Edit')

@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')
    {!! Button::warning('<i class="fa fa-arrow-left" aria-hidden="true"></i> Back')->asLinkTo(route('admin.users.index'))->addAttributes(['class' => "btn-sm"]) !!}
    <br/><br/>
    @component('admin.users.tabs',['user' => $form->getModel()])
        <br/>
        <?php $icon = Icon::create('save');?>
        {!!
            form($form->add('edit', 'submit', [
                'attr' => ['class' => 'btn btn-primary btn-block'],
                'label' => $icon . ' Save'
            ]))
        !!}
    @endcomponent
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@extends('adminlte::page')

@section('title', 'User - New')

@section('content_header')
    <h1>New User</h1>
@stop

@section('content')
<div class="col-md-9">
    {!! Button::warning('<i class="fa fa-arrow-left" aria-hidden="true"></i> Back')->asLinkTo(route('admin.users.index'))->addAttributes(['class' => "btn-sm"]) !!}
    <br/><br/>
    <?php $icon = Icon::create('save');?>
    {!! form($form->add('insert','submit', [
        'attr' => ['class' => 'btn btn-primary btn-block'],
        'label' => $icon . ' Save'
    ]))
    !!}
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

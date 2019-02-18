@extends('layouts.app')

@section('content')
    <div class="container">
        @component('admin.users.tabs',['user' => $form->getModel()])
            <div class="col-md-12">
                <h3>Editar usuário</h3>
                {!! form($form->add('edit','submit', [
                    'attr' => ['class' => 'btn btn-primary btn-block'],
                    'label' => 'Editar'
                ]))
                !!}
            </div>
        @endcomponent
    </div>
@endsection
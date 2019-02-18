@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Novo usuário</h3>
        {!! form($form->add('insert','submit', [
            'attr' => ['class' => 'btn btn-primary btn-block'],
            'label' => 'Salvar'
        ]))
        !!}
    </div>
@endsection
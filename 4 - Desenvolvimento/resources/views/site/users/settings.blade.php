@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Editar meu perfil</h3>
        {!! form($form->add('insert','submit', [
            'attr' => ['class' => 'btn btn-primary btn-block'],
            'label' => 'Salvar'
        ]))
        !!}
    </div>
@endsection
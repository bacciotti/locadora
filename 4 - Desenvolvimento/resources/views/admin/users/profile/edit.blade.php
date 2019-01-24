@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

                <div class="col-md-12">
                    <h3>Editar perfil</h3>
                    <?php $icon = Icon::create('pencil');?>
                    {!!
                        form($form->add('salve', 'submit', [
                            'attr' => ['class' => 'btn btn-primary btn-block'],
                            'label' => $icon
                        ]))
                    !!}
                </div>

        </div>
    </div>
@endsection
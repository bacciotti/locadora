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
        <div class="form-group {{ $errors->has('genres_id') ? 'has-error' : ''}}">
            <label for="users" class="control-label">{{ 'Gênero' }}</label>
            <select id="users" class="form-control select2" name="users[]" multiple>
                @foreach($users as $user)
                    <option value="{{ isset($user->id) ? $user->id : ''}}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
    @endcomponent
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')
    <script>
        $('.select2').select2();

    </script>
@endsection
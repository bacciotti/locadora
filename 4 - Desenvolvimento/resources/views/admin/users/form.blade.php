<div class="form-group {{ $errors->has('pt_br_tittle') ? 'has-error' : ''}}">
    <label for="pt_br_tittle" class="control-label">{{ 'Nome' }}</label>
    <input class="form-control" name="pt_br_tittle" type="text" id="pt_br_tittle" value="{{ isset($movie->pt_br_tittle) ? $movie->pt_br_tittle : ''}}" >
    {!! $errors->first('pt_br_tittle', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('original_title') ? 'has-error' : ''}}">
    <label for="original_title" class="control-label">{{ 'E-mail' }}</label>
    <input class="form-control" name="original_title" type="text" id="original_title" value="{{ isset($movie->original_title) ? $movie->original_title : ''}}" >
    {!! $errors->first('original_title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('genres_id') ? 'has-error' : ''}}">
    <label for="users" class="control-label">{{ 'Gênero' }}</label>
    <select id="users" class="form-control select2" name="users">
        <option value="Admnistrador">Admnistrador</option>
        <option value="Cliente">Cliente</option>
        <option value="Admnistrador">Admnistrador</option>
    </select>
</div>
<div class="form-group {{ $errors->has('genres_id') ? 'has-error' : ''}}">
    <label for="users" class="control-label">{{ 'Gênero' }}</label>
    <select id="users" class="form-control select2" name="users[]" multiple>
        @foreach($users as $user)
            <option value="{{ isset($user->id) ? $user->id : ''}}">{{ $user->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-cloud-upload"></span> Salvar</button>
</div>

@section('js')
    <script>
        $('.select2').select2();

    </script>
@endsection
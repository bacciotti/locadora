<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'Usuário' }}</label>
    <select id="user_id" class="form-control select2" name="user_id">
        @foreach($users as $user)
            <option value="{{ isset($user->id) ? $user->id : ''}}">{{ $user->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Data' }}</label>
    <input class="form-control" name="date" type="date" id="date" value="{{ isset($booking->date) ? $booking->date : ''}}" >
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('movies_id') ? 'has-error' : ''}}">
    <label for="movies" class="control-label">{{ 'Filmes' }}</label>
    <select id="movies" class="form-control select2" name="movies[]" multiple>
        @foreach($movies as $movie)
            <option value="{{ isset($movie->id) ? $movie->id : ''}}">{{ $movie->pt_br_tittle }} ({{ $movie->original_title }})</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-cloud-upload"></span> Salvar</button>
</div>

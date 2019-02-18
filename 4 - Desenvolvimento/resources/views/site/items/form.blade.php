<div class="form-group {{ $errors->has('movie_id') ? 'has-error' : ''}}">
    <label for="movie_id" class="control-label">{{ 'Filme' }}</label>
    <select id="movie_id" class="form-control select2" name="movie_id">
        @foreach($movies as $movie)
            <option value="{{ isset($movie->id) ? $movie->id : ''}}">{{ $movie->pt_br_tittle }} ({{ $movie->original_title }})</option>
        @endforeach
    </select>
</div>
<div class="form-group {{ $errors->has('media_type_id') ? 'has-error' : ''}}">
    <label for="media_type_id" class="control-label">{{ 'Tipo de Mídia' }}</label>
    <select id="media_type_id" class="form-control select2" name="media_type_id">
        @foreach($media_types as $media_type)
            <option value="{{ isset($media_type->id) ? $media_type->id : ''}}">{{ $media_type->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group {{ $errors->has('serial_number') ? 'has-error' : ''}}">
    <label for="serial_number" class="control-label">{{ 'Numero Serial' }}</label>
    <input class="form-control" name="serial_number" type="text" id="serial_number" value="{{ isset($item->serial_number) ? $item->serial_number : ''}}" >
    {!! $errors->first('serial_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('distributor_id') ? 'has-error' : ''}}">
    <label for="distributor_id" class="control-label">{{ 'Distribuidor' }}</label>
    <select id="distributor_id" class="form-control select2" name="distributor_id">
        @foreach($distributors as $distributor)
            <option value="{{ isset($distributor->id) ? $distributor->id : ''}}">{{ $distributor->corporate_name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group {{ $errors->has('date_acquisition') ? 'has-error' : ''}}">
    <label for="date_acquisition" class="control-label">{{ 'Data de Aquisição' }}</label>
    <input class="form-control" name="date_acquisition" type="date" id="date_acquisition" value="{{ isset($item->date_acquisition) ? $item->date_acquisition : ''}}" >
    {!! $errors->first('date_acquisition', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-cloud-upload"></span> Salvar</button>
</div>

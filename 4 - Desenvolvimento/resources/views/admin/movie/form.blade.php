<div class="form-group {{ $errors->has('original_title') ? 'has-error' : ''}}">
    <label for="original_title" class="control-label">{{ 'Original Title' }}</label>
    <input class="form-control" name="original_title" type="text" id="original_title" value="{{ isset($movie->original_title) ? $movie->original_title : ''}}" >
    {!! $errors->first('original_title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pt_br_tittle') ? 'has-error' : ''}}">
    <label for="pt_br_tittle" class="control-label">{{ 'Pt Br Tittle' }}</label>
    <input class="form-control" name="pt_br_tittle" type="text" id="pt_br_tittle" value="{{ isset($movie->pt_br_tittle) ? $movie->pt_br_tittle : ''}}" >
    {!! $errors->first('pt_br_tittle', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('countries') ? 'has-error' : ''}}">
    <label for="countries" class="control-label">{{ 'Countries' }}</label>
    <input class="form-control" name="countries" type="text" id="countries" value="{{ isset($movie->countries) ? $movie->countries : ''}}" >
    {!! $errors->first('countries', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
    <label for="year" class="control-label">{{ 'Year' }}</label>
    <input class="form-control" name="year" type="text" id="year" value="{{ isset($movie->year) ? $movie->year : ''}}" >
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('director') ? 'has-error' : ''}}">
    <label for="director" class="control-label">{{ 'Director' }}</label>
    <input class="form-control" name="director" type="text" id="director" value="{{ isset($movie->director) ? $movie->director : ''}}" >
    {!! $errors->first('director', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cast') ? 'has-error' : ''}}">
    <label for="cast" class="control-label">{{ 'Cast' }}</label>
    <input class="form-control" name="cast" type="text" id="cast" value="{{ isset($movie->cast) ? $movie->cast : ''}}" >
    {!! $errors->first('cast', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sinopse') ? 'has-error' : ''}}">
    <label for="sinopse" class="control-label">{{ 'Sinopse' }}</label>
    <textarea class="form-control" rows="5" name="sinopse" type="textarea" id="sinopse" >{{ isset($movie->sinopse) ? $movie->sinopse : ''}}</textarea>
    {!! $errors->first('sinopse', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('duration') ? 'has-error' : ''}}">
    <label for="duration" class="control-label">{{ 'Duration' }}</label>
    <input class="form-control" name="duration" type="text" id="duration" value="{{ isset($movie->duration) ? $movie->duration : ''}}" >
    {!! $errors->first('duration', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

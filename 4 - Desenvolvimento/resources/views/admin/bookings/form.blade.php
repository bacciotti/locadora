<div class="form-group {{ $errors->has('date_time') ? 'has-error' : ''}}">
    <label for="date_time" class="control-label">{{ 'Date Time' }}</label>
    <input class="form-control" name="date_time" type="datetime-local" id="date_time" value="{{ isset($booking->date_time) ? $booking->date_time : ''}}" >
    {!! $errors->first('date_time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($booking->user_id) ? $booking->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-cloud-upload"></span> Salvar</button>
</div>

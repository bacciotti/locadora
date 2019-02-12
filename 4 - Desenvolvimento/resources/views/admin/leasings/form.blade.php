<div class="form-group {{ $errors->has('date_time_leasing') ? 'has-error' : ''}}">
    <label for="date_time_leasing" class="control-label">{{ 'Date Time Leasing' }}</label>
    <input class="form-control" name="date_time_leasing" type="datetime-local" id="date_time_leasing" value="{{ isset($leasing->date_time_leasing) ? $leasing->date_time_leasing : ''}}" >
    {!! $errors->first('date_time_leasing', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_time_devolution') ? 'has-error' : ''}}">
    <label for="date_time_devolution" class="control-label">{{ 'Date Time Devolution' }}</label>
    <input class="form-control" name="date_time_devolution" type="datetime-local" id="date_time_devolution" value="{{ isset($leasing->date_time_devolution) ? $leasing->date_time_devolution : ''}}" >
    {!! $errors->first('date_time_devolution', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($leasing->user_id) ? $leasing->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('booking_id') ? 'has-error' : ''}}">
    <label for="booking_id" class="control-label">{{ 'Booking Id' }}</label>
    <input class="form-control" name="booking_id" type="number" id="booking_id" value="{{ isset($leasing->booking_id) ? $leasing->booking_id : ''}}" >
    {!! $errors->first('booking_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-cloud-upload"></span> Salvar</button>
</div>

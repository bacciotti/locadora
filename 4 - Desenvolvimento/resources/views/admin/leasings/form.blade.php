<!--
<div class="form-group {{ $errors->has('booking_id') ? 'has-error' : ''}}">
    <label for="booking_id" class="control-label">{{ 'Reserva' }}</label>
    <select id="booking_id" class="form-control select2" name="booking_id">
        <option value="0">Nenhuma</option>
        @foreach($bookings as $booking)
            <option value="{{ isset($booking->id) ? $booking->id : ''}}">{{ $booking->id }}</option>
        @endforeach
    </select>
</div>
<div class="form-group {{ $errors->has('date_time_devolution') ? 'has-error' : ''}}">
    <label for="expected_date_devolution" class="control-label">{{ 'Data de Devolução' }}</label>
    <input class="form-control" name="date_time_devolution" type="date" id="date_time_devolution" value="{{ isset($leasing->date_time_devolution) ? $leasing->date_time_devolution : ''}}" >
    {!! $errors->first('date_time_devolution', '<p class="help-block">:message</p>') !!}
</div>
-->

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'Cliente' }}</label>
    <select id="user_id" class="form-control select2" name="user_id">
        @foreach($users as $user)
            <option value="{{ isset($user->id) ? $user->id : ''}}">{{ $user->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group {{ $errors->has('expected_date_devolution') ? 'has-error' : ''}}">
    <label for="expected_date_devolution" class="control-label">{{ 'Previsão de Devolução' }}</label>
    <input class="form-control" name="expected_date_devolution" type="date" id="expected_date_devolution" value="{{ isset($leasing->expected_date_devolution) ? $leasing->expected_date_devolution : ''}}" >
    {!! $errors->first('expected_date_devolution', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('item_id') ? 'has-error' : ''}}">
    <label for="items" class="control-label">{{ 'Item' }}</label>
    <select id="items" class="form-control select2" name="items[]" multiple>
        @foreach($items as $item)
            <option value="{{ isset($item->id) ? $item->id : ''}}">{{ $item->pt_br_tittle }} ({{ $item->name }})</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-cloud-upload"></span> Salvar</button>
</div>

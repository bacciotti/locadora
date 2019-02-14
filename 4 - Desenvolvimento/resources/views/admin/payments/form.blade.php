<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'Type' }}</label>
    <div class="radio">
    <label><input name="type" type="radio" value="0" @if (isset($payment)) {{ (0 == $payment->type) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Dinheiro</label>&nbsp;
    <label><input name="type" type="radio" value="1" {{ (isset($payment) && 1 == $payment->type) ? 'checked' : '' }}> Cartão</label>&nbsp;
    <label><input name="type" type="radio" value="2" {{ (isset($payment) && 2 == $payment->type) ? 'checked' : '' }}> Cheque</label>
</div>
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_time') ? 'has-error' : ''}}">
    <label for="date_time" class="control-label">{{ 'Date Time' }}</label>
    <input class="form-control" name="date_time" type="datetime-local" id="date_time" value="{{ isset($payment->date_time) ? $payment->date_time : ''}}" required>
    {!! $errors->first('date_time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('value') ? 'has-error' : ''}}">
    <label for="value" class="control-label">{{ 'Value' }}</label>
    <input class="form-control" name="value" type="number" id="value" value="{{ isset($payment->value) ? $payment->value : ''}}" required>
    {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('leasing_id') ? 'has-error' : ''}}">
    <label for="leasing_id" class="control-label">{{ 'Leasing Id' }}</label>
    <input class="form-control" name="leasing_id" type="number" id="leasing_id" value="{{ isset($payment->leasing_id) ? $payment->leasing_id : ''}}" required>
    {!! $errors->first('leasing_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-cloud-upload"></span> Salvar</button>
</div>

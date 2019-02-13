<div class="form-group {{ $errors->has('payment_id') ? 'has-error' : ''}}">
    <label for="payment_id" class="control-label">{{ 'Payment Id' }}</label>
    <input class="form-control" name="payment_id" type="number" id="payment_id" value="{{ isset($cardpayment->payment_id) ? $cardpayment->payment_id : ''}}" required>
    {!! $errors->first('payment_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('company') ? 'has-error' : ''}}">
    <label for="company" class="control-label">{{ 'Company' }}</label>
    <input class="form-control" name="company" type="number" id="company" value="{{ isset($cardpayment->company) ? $cardpayment->company : ''}}" required>
    {!! $errors->first('company', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('number') ? 'has-error' : ''}}">
    <label for="number" class="control-label">{{ 'Number' }}</label>
    <input class="form-control" name="number" type="number" id="number" value="{{ isset($cardpayment->number) ? $cardpayment->number : ''}}" required>
    {!! $errors->first('number', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-cloud-upload"></span> Salvar</button>
</div>

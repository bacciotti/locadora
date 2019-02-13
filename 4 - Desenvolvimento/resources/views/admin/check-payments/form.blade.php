<div class="form-group {{ $errors->has('payment_id') ? 'has-error' : ''}}">
    <label for="payment_id" class="control-label">{{ 'Payment Id' }}</label>
    <input class="form-control" name="payment_id" type="number" id="payment_id" value="{{ isset($checkpayment->payment_id) ? $checkpayment->payment_id : ''}}" required>
    {!! $errors->first('payment_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bank') ? 'has-error' : ''}}">
    <label for="bank" class="control-label">{{ 'Bank' }}</label>
    <input class="form-control" name="bank" type="number" id="bank" value="{{ isset($checkpayment->bank) ? $checkpayment->bank : ''}}" required>
    {!! $errors->first('bank', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('agency') ? 'has-error' : ''}}">
    <label for="agency" class="control-label">{{ 'Agency' }}</label>
    <input class="form-control" name="agency" type="number" id="agency" value="{{ isset($checkpayment->agency) ? $checkpayment->agency : ''}}" required>
    {!! $errors->first('agency', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('account_number') ? 'has-error' : ''}}">
    <label for="account_number" class="control-label">{{ 'Account Number' }}</label>
    <input class="form-control" name="account_number" type="number" id="account_number" value="{{ isset($checkpayment->account_number) ? $checkpayment->account_number : ''}}" required>
    {!! $errors->first('account_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('check_number') ? 'has-error' : ''}}">
    <label for="check_number" class="control-label">{{ 'Check Number' }}</label>
    <input class="form-control" name="check_number" type="number" id="check_number" value="{{ isset($checkpayment->check_number) ? $checkpayment->check_number : ''}}" required>
    {!! $errors->first('check_number', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-cloud-upload"></span> Salvar</button>
</div>

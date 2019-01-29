<div class="form-group {{ $errors->has('corporate_name') ? 'has-error' : ''}}">
    <label for="corporate_name" class="control-label">{{ 'Corporate Name' }}</label>
    <input class="form-control" name="corporate_name" type="text" id="corporate_name" value="{{ isset($distributor->corporate_name) ? $distributor->corporate_name : ''}}" >
    {!! $errors->first('corporate_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cnpj') ? 'has-error' : ''}}">
    <label for="cnpj" class="control-label">{{ 'Cnpj' }}</label>
    <input class="form-control" name="cnpj" type="number" id="cnpj" value="{{ isset($distributor->cnpj) ? $distributor->cnpj : ''}}" >
    {!! $errors->first('cnpj', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($distributor->address) ? $distributor->address : ''}}" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Phone' }}</label>
    <input class="form-control" name="phone" type="number" id="phone" value="{{ isset($distributor->phone) ? $distributor->phone : ''}}" >
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('contact_person') ? 'has-error' : ''}}">
    <label for="contact_person" class="control-label">{{ 'Contact Person' }}</label>
    <input class="form-control" name="contact_person" type="text" id="contact_person" value="{{ isset($distributor->contact_person) ? $distributor->contact_person : ''}}" >
    {!! $errors->first('contact_person', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-save"></span> Save</button>
</div>

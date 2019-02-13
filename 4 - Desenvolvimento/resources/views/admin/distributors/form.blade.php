<div class="form-group {{ $errors->has('corporate_name') ? 'has-error' : ''}}">
    <label for="corporate_name" class="control-label">{{ 'Razão Social' }}</label>
    <input class="form-control" name="corporate_name" type="text" id="corporate_name" value="{{ isset($distributor->corporate_name) ? $distributor->corporate_name : ''}}" required>
    {!! $errors->first('corporate_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cnpj') ? 'has-error' : ''}}">
    <label for="cnpj" class="control-label">{{ 'CNPJ' }}</label>
    <input class="form-control" name="cnpj" type="number" id="cnpj" value="{{ isset($distributor->cnpj) ? $distributor->cnpj : ''}}" required>
    {!! $errors->first('cnpj', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Endereço' }}</label>
    <textarea class="form-control" rows="5" name="address" type="textarea" id="address" required>{{ isset($distributor->address) ? $distributor->address : ''}}</textarea>
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('contact_person') ? 'has-error' : ''}}">
    <label for="contact_person" class="control-label">{{ 'Contato' }}</label>
    <input class="form-control" name="contact_person" type="text" id="contact_person" value="{{ isset($distributor->contact_person) ? $distributor->contact_person : ''}}" required>
    {!! $errors->first('contact_person', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Telefone' }}</label>
    <input class="form-control" name="phone" type="number" id="phone" value="{{ isset($distributor->phone) ? $distributor->phone : ''}}" required>
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-cloud-upload"></span> Salvar</button>
</div>

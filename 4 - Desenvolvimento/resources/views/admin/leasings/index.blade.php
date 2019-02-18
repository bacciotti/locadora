@extends('adminlte::page')

@section('title', 'Locações')

@section('content_header')
    <h1>Locações</h1>
@stop

@section('content')
<a href="{{ url('/admin/leasings/create') }}" class="btn btn-success btn-sm" title="Adiconar Novo Leasing"><i class="fa fa-plus" aria-hidden="true"></i> Adiconar Novo</a>
<form class="form-inline my-2 my-lg-0 float-right" style="display:inline-flex" method="GET" action="{{ url('/admin/leasings') }}" accept-charset="UTF-8" role="search">
    <input type="text" class="form-control" name="search" placeholder="Pesquisar..." value="{{ request('search') }}">
    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
</form>
<br/><br/>
        
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Usuário</th>
                <th>Data de Locação</th>
                <th>Previsão de Devolução</th>
                <th>Data de Devolução</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($leasings as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ date( 'd/m/Y' , strtotime($item->created_at)) }}</td>
                <td>{{ date( 'd/m/Y' , strtotime($item->expected_date_devolution)) }}</td>
                <td>{{ isset($item->date_time_devolution) ? date( 'd/m/Y' , strtotime($item->date_time_devolution)) : '' }}</td>
                <td>{{ "Devolvido" }}</td>
                <td>
                    <a href="{{ url('/admin/leasings/' . $item->id . '/edit') }}" title="Editar Leasing"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                    <form method="POST" action="{{ url('/admin/leasings' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Excluir Leasing" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                    </form>
                    <button class="btn btn-success btn-sm" data-mytitle="{{$item->title}}" data-catid={{$item->id}} data-toggle="modal" data-target="#edit"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Fechamento</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $leasings->appends(['search' => Request::get('search')])->render() !!} </div>
</div>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Fechamento Locação - Nº: {{isset($item->id)}}</h4>
            </div>
            <form method="POST" action="{{route('payments.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">

                {{csrf_field()}}
                <div class="modal-body">
                    <input type="hidden" name="category_id" id="cat_id" value="">
                    <div class="form-group">
                        <label for="expected_date_devolution" class="control-label">{{ 'Data de Devolução' }}</label>
                        <input class="form-control" name="date_time" type="date" id="date_time"  value="{{ isset($payment->date_time) ? $payment->date_time : ''}}" >
                        {!! $errors->first('date_time_devolution', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="users" class="control-label">{{ 'Formas de Pagamento' }}</label>
                        <select id="options" class="form-control select2" name="options" onchange="verifica(this.value)" >
                            <option value="0" selected>Dinheiro</option>
                            <option value="1">Cheque</option>
                            <option value="2">Cartão</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-4" class="form-group">
                            <label for="value" class="control-label">{{ 'Valor R$' }}</label>
                            <input class="form-control" name="valor" type="number" id="valor" value="{{ isset($payment->value) ? $payment->value : ''}}">
                            {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-sm-4" class="form-group">
                            <label for="users" class="control-label">{{ 'Operadora' }}</label>
                            <select id="operadora" class="form-control select2" name="operadora" disabled>
                                <option value="0" selected >Visa</option>
                                <option value="1">Mastercard</option>
                                <option value="2">Elo</option>
                            </select>
                        </div>
                        <div class="col-sm-4" class="form-group">
                            <label for="value" class="control-label">{{ 'Número' }}</label>
                            <input class="form-control" name="numero" type="number" id="numero" value="{{ isset($payment->value) ? $payment->value : ''}}" disabled>
                            {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3" class="form-group">
                            <label for="title">Banco</label>
                            <input type="text" class="form-control" name="banco" id="banco" value="" disabled>
                        </div>
                        <div class="col-sm-3" class="form-group">
                            <label for="title">Agência</label>
                            <input type="text" class="form-control" name="agencia" id="agencia" value="" disabled>
                        </div>
                        <div class="col-sm-3" class="form-group">
                            <label for="title">Conta</label>
                            <input type="text" class="form-control" name="conta" id="conta" value="" disabled>
                        </div>
                        <div class="col-sm-3" class="form-group">
                            <label for="title">Número cheque</label>
                            <input type="text" class="form-control" name="cheque" id="cheque" value="" disabled>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Finalizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        function verifica(value){
            var numero = document.getElementById("numero");
            var banco = document.getElementById("banco");
            var agencia = document.getElementById("agencia");
            var conta = document.getElementById("conta");
            var cheque = document.getElementById("cheque");

            if(value == 0){ //Dinheiro
                valor.disabled = false;
                operadora.disabled = true;
                numero.disabled = true;
                banco.disabled = true;
                agencia.disabled = true;
                conta.disabled = true;
                cheque.disabled = true;
            }else if(value == 1){ //Cheque
                valor.disabled = true;
                operadora.disabled = true;
                numero.disabled = true;
                banco.disabled = false;
                agencia.disabled = false;
                conta.disabled = false;
                cheque.disabled = false;
            } else if(value == 2) { //Cartão
                valor.disabled = true;
                operadora.disabled = false;
                numero.disabled = false;
                banco.disabled = true;
                agencia.disabled = true;
                conta.disabled = true;
                cheque.disabled = true;
            }
        };
    </script>
@stop


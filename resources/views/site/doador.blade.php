@extends('head')
@include('menu')
<div class="container-fluid well-lg">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Identificação</div>
                <div class="panel-body alert-info">
                    @if(session('result') == 'success')
                        <div class="alert alert-success">
                            <strong>Sucesso!</strong>
                            {{ session("title") }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if(session('result') == 'error')
                        <div class="alert alert-danger">
                            <strong>Erro!</strong>
                            {{ session("title") }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="panel-group">
                        <form class="form-horizontal col-md-12" role="form"
                              action="{{route('principal.store-doador')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-2">
                                        <label for="numCpf" class="control-label">CPF</label>
                                        <input type="text" class="form-control" id="numCpf" name="numCpf"
                                               required="required">
                                    </div>
                                    <div class="col-md-10">
                                        <label for="nomDoador" class="control-label">Nome</label>
                                        <input type="text" class="form-control" id="nomDoador" name="nomDoador"
                                               required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-2">
                                        <label for="datNascimento" class="control-label">Data de nascimento</label>
                                        <input type="date" class="form-control" id="datNascimento" name="datNascimento"
                                               required="required">
                                    </div>
                                    <div class="col-md-10">
                                        <label class="control-label">Genêro</label>
                                        <div class="row">
                                            <div class="checkbox-inline">
                                                <input class="checkbox-inline" type="radio" id="codGenero"
                                                       name="codGenero"
                                                       value="F">
                                                <label class="control-label" for="codGenero">Feminino</label>
                                            </div>
                                            <div class="checkbox-inline">
                                                <input class="checkbox-inline" type="radio" id="codGenero"
                                                       name="codGenero"
                                                       value="M">
                                                <label class="control-label" for="codGenero">Masculino</label>
                                            </div>
                                            <div class="checkbox-inline">
                                                <input class="checkbox-inline" type="radio" id="codGenero"
                                                       name="codGenero"
                                                       value="N">
                                                <label class="control-label" for="codGenero">Não informar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="desEmail" class="control-label">E-mail</label>
                                        <input type="email" class="form-control" id="desEmail" name="desEmail"
                                               required="required">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="desEnderecoDoacao" class="control-label">Endereço de retirada da
                                            doação</label>
                                        <input type="text" class="form-control" id="desEnderecoDoacao"
                                               name="desEnderecoDoacao"
                                               required="required">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="desBairro" class="control-label">Bairro</label>
                                        <input type="text" class="form-control" id="desBairro"
                                               name="desBairro">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="desReferencia" class="control-label">Referência</label>
                                        <input type="text" class="form-control" id="desReferencia" name="desReferencia">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="sig_uf" class="control-label">UF</label>
                                        <select class="form-control" data-live-search="true" id="sig_uf"
                                                name="sig_uf">
                                            <option data-tokens="ketchup mustard" value="">Selecione</option>
                                            @foreach($ufs as $keyUf=>$valueUf)
                                                <option data-tokens="ketchup mustard"
                                                        value="{{ $valueUf->id }}"> {{ $valueUf->sig_uf }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="sig_uf" class="control-label">UF</label>
                                        <select class="form-control" data-live-search="true" id="sig_uf"
                                                name="sig_uf">
                                            <option data-tokens="ketchup mustard" value="">Selecione</option>
                                            @foreach($cidades as $keyCidade=>$valueCidade)
                                                <option data-tokens="ketchup mustard"
                                                        value="{{ $valueCidade->id }}"> {{ $valueCidade->nom_cidade }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-10">
                                        <label class="control-label">Desejo compartilhar</label>
                                        <div class="row">
                                            <div class="checkbox-inline">
                                                <input class="checkbox-inline" type="checkbox" id="codCompartilhar"
                                                       name="codCompartilhar"
                                                       value="D">
                                                <label class="control-label" for="codGenero">Doação</label>
                                            </div>
                                            <div class="checkbox-inline">
                                                <input class="checkbox-inline" type="checkbox" id="codCompartilhar"
                                                       name="codCompartilhar" value="S">
                                                <label class="control-label" for="codGenero">Serviço</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="control-label">Prestação de serviço</label>
                                        <div class="row">
                                            <textarea class="form-control" rows="6" cols="80"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-success" value="Enviar" name="enviar"
                                               id="enviar">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@extends('footer')


@extends('home')

@section('titulo','Home')

@section('conteudo')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Home Administrador</div>
                        <div class="panel-body">

                            <div class="row azul col-md-2 well-sm center-block" style="margin-top: 1%;">
                                <p class="lead"> <img src="/img/saida.png" class="center-block"/> </p>
                                <p><a class="btn btn-lg btn-primary center-block" href="{{route('user.create')}}" role="button">Usuários</a></p>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection

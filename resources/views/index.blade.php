@extends('layout')

@section('title', 'Relatório de Produtividade')

@section('content')

@php 

    $usuario = auth()->user();
    $setor = $usuario->setor;

@endphp
    
<div class="wrapper pt-5 mt-4 ">
    <div class="page-title-box m-0">
        <div class="container-fluid">

            <div class="row ">
                <div class="col-sm-12">
                    
                    @if ($usuario->setor == 1) 
                        @php $setor = 'Financeiro';@endphp
                    @endif

                    @if ($usuario->setor == 2) 
                        @php $setor = 'Vendas';@endphp
                    @endif

                    @if ($usuario->setor == 3) 
                        @php $setor = 'Pós Vendas';@endphp
                    @endif

                    @if ($usuario->setor == 4) 
                        @php $setor = 'Suporte';@endphp
                    @endif

                    @if ($usuario->setor == 5) 
                        @php $setor = 'Programação';@endphp
                    @endif
                    
                    
                    <h4 class="page-title">Relatório de Produtividade - {{ $setor }}</h4>
                    

                </div>
            </div>
        </div>
        <!-- end container-fluid -->
    
    </div>
    <!-- page-title-box -->

    

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <form action="{{ route('relatorio-enviar') }}" method="POST" role="form" class="">
                                @csrf
                                <div class="row form-group">
                                    @if (session('success'))
                                    <div class="alert alert-primary alert-dismissible fade show col-12" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Obrigado! </strong>{{ session('success') }}
                                    </div>
                                    @endif
                                    @if (session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show col-12" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Erro ao enviar o formulário, </strong>{{ session('error') }}
                                    </div>
                                    @endif

                                    <div class="col-sm-6">
                                        <label>Nome:</label>
                                        <input type="text" class="form-control" value="{{ $usuario->name }}" disabled/>
                                        <input type="hidden" class="form-control" name="nome"   value="{{ $usuario->name }}"/>
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Qual o seu setor?</label>
                                        <select class="form-control" disabled >
                                            <option value="{{ $usuario->setor }}" selected>{{ $setor }}</option>
                                        </select>
                                        <input type="hidden" class="form-control" name="setor"   value="{{ $usuario->setor }}"/>
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="form-group col-sm-6">
                                        <label name="feito">O que foi feito durante a semana?</label>
                                        <textarea required class="form-control" name="feito" rows="10" placeholder="Seja breve e direto!"></textarea>
                                        
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label name="nfeito" class="">Foi deixado de fazer algo? O que?</label>
                                        <textarea required class="form-control " name="nfeito" rows="10" placeholder="Tudo que foi deixado de fazer deve ser mencionado, seja ele por fatores externos ou internos."></textarea>
                                        
                                    </div>
                                </div>

                                <div class="row form-group text-center">
                                    <div class="form-group col-sm-12">
                                        <label class=""><h5>Nivel de produtividade:</h5></label>
                                        <div class="estrelas">
                                            <!--<input type="radio" id="cm_star-empty" name="fb" value="" checked/>-->

                                            <label for="cm_star-1"><i class="fa"></i></label>
                                            <input type="radio" id="cm_star-1" name="produtividade" value="1" checked/>
                                            <label for="cm_star-2"><i class="fa"></i></label>
                                            <input type="radio" id="cm_star-2" name="produtividade" value="2" />
                                            <label for="cm_star-3"><i class="fa"></i></label>
                                            <input type="radio" id="cm_star-3" name="produtividade" value="3" />
                                            <label for="cm_star-4"><i class="fa"></i></label>
                                            <input type="radio" id="cm_star-4" name="produtividade" value="4"/>
                                            <label for="cm_star-5"><i class="fa"></i></label>
                                            <input type="radio" id="cm_star-5" name="produtividade" value="5"/>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light">Enviar Relatório</button>
                                @if ($usuario->setor == 1)
                                <a href="{{ route('result-financeiro') }}"><button type="button" class="btn btn-info btn-lg waves-effect waves-light">Ver Meus Relatórios </button></a>
                                @endif
                                @if ($usuario->setor == 2)
                                <a href="{{ route('result-vendas') }}"><button type="button" class="btn btn-info btn-lg waves-effect waves-light">Ver Meus Relatórios </button></a>
                                @endif
                                @if ($usuario->setor == 3)
                                <a href="{{ route('result-posvendas') }}"><button type="button" class="btn btn-info btn-lg waves-effect waves-light">Ver Meus Relatórios </button></a>
                                @endif
                                @if ($usuario->setor == 4)
                                <a href="{{ route('result-suporte') }}"><button type="button" class="btn btn-info btn-lg waves-effect waves-light">Ver Meus Relatórios </button></a>
                                @endif
                                @if ($usuario->setor == 5)
                                <a href="{{ route('result-programacao') }}"><button type="button" class="btn btn-info btn-lg waves-effect waves-light">Ver Meus Relatórios </button></a>
                                @endif
                        </form>
                    
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end page content-->

</div>

@endsection
@extends('layout')

@section('title', 'Relatório de Produtividade')

@section('content')



@php $usuario = auth()->user(); @endphp

<div class="wrapper pt-5 mt-4 ">
    <div class="page-title-box mt-3">
        <div class="container-fluid">

            <div class="row">
                <div class="col">
                    <span class="pull-right">
                        <div class="row">
                            <form action="{{ route('pesquisar') }}" method="POST">
                                @csrf   
                                <div class="pr-1 d-grid pull-right col-12 d-md-flex justify-content-end mr-3"> 
                                    
                                    @if ($usuario->setor != 0)
                                    <input type="hidden" name="setor" value="{{ $usuario->setor }}">
                                    @elseif ($setor == 'Financeiro')
                                    <input type="hidden" name="setor" value="1">
                                    @elseif ($setor == 'Vendas')
                                    <input type="hidden" name="setor" value="2">
                                    @elseif ($setor == 'Pós Vendas')
                                    <input type="hidden" name="setor" value="3">
                                    @elseif ($setor == 'Suporte')
                                    <input type="hidden" name="setor" value="4">
                                    @elseif ($setor == 'Programação')
                                    <input type="hidden" name="setor" value="5">
                                    @endif
                                    <input type="text" class="form-control form-control mb-1 mr-1  text-center data" id="data_inicio" name="data_inicio" placeholder="Data Inicio" value="{{ isset($data_inicio) ? $data_inicio : '' }}">
                                    <input type="text" class="form-control form-control mb-1 mr-1  text-center data" id="data_fim" name="data_fim" placeholder="Data Fim" value="{{ isset($data_fim)== true ? $data_fim : '' }}">
                                    <select name="produtividade" class="form-control mb-1 ml-0 mr-1">
                                        <option value="" selected hidden>Nível de Produtividade</option>
                                        <option value="1">1 Estrela</option>
                                        <option value="2">2 Estrelas</option>
                                        <option value="3">3 Estrelas</option>
                                        <option value="4">4 Estrelas</option>
                                        <option value="5">5 Estrelas</option>
                                    </select>  
                                    <button type="submit" class="btn btn-info mb-1"><i class="fa fa-search"></i></button>     
                                </div>                          
                            </form>
                        </div>
                    </span>
                    
                    <h4 class="page-title mt-1">Relatórios de Produtividade - {{ $setor }}</h4>

                </div>
            </div>
        </div>
        <!-- end container-fluid -->
    </div>

        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                
                                
                                <div class="table-responsive">

                                    @if (session('error'))    
                                    <div class="alert alert-danger bg-danger text-white" role="alert">
                                        <strong>Ops! </strong>{{ session('error') }}
                                    </div>
                                    @endif
                                    
                                    <table class="table table-hover mt-0 mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Setor</th>
                                            <th scope="col">Produtividade  </th>
                                            <th scope="" width="10%">Data / Hora</th>
                                            <th scope="" width="5%"></th>
                                        </tr>
                                        </thead>
                                        @foreach($relatorios as $relatorio)
                                        
                                        

                                        <tbody>
                                        <tr>
                                            <th scope="row">{{ $relatorio->nome }}</th>
                                            <td>{{ $relatorio->setor == 1 ? 'Financeiro' : '' }}
                                                {{ $relatorio->setor == 2 ? 'Vendas' : '' }}
                                                {{ $relatorio->setor == 3 ? 'Pós Vendas' : '' }}
                                                {{ $relatorio->setor == 4 ? 'Suporte' : '' }}
                                                {{ $relatorio->setor == 5 ? 'Programação' : '' }}
                                            </td>
                                            <td>
                                                <div class="row estrelas">
                                                    
                                                    <label for="cm_star-1"><i class="fa"></i></label>
                                                    <input type="radio" id="cm_star-1" name="produtividade" value="1" disabled checked/>
                                                    @if ($relatorio->produtividade >= 2)
                                                    <label for="cm_star-2"><i class="fa"></i></label>
                                                    <input type="radio" id="cm_star-2" name="produtividade" value="2" disabled checked/>
                                                    @endif
                                                    @if ($relatorio->produtividade >= 3)
                                                    <label for="cm_star-3"><i class="fa"></i></label>
                                                    <input type="radio" id="cm_star-3" name="produtividade" value="3" disabled checked />
                                                    @endif
                                                    @if ($relatorio->produtividade >= 4)
                                                    <label for="cm_star-4"><i class="fa"></i></label>
                                                    <input type="radio" id="cm_star-4" name="produtividade" value="4" disabled checked/>
                                                    @endif
                                                    @if ($relatorio->produtividade == 5)
                                                    <label for="cm_star-5"><i class="fa"></i></label>
                                                    <input type="radio" id="cm_star-5" name="produtividade" value="5"  checked/>
                                                    @endif
                                                </div>                                                
                                            </td>                                            
                                            <td>{{ $relatorio->created_at->format('d/m/Y - H:i') }}</td>
                                            <td>
                                                <div>
                                                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example{{ $relatorio->id }}-modal-lg">Visualizar</button>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                    @if (empty($relatorio))    
                                    <h5 class="text-center text-danger">Sua busca não retornou nenhum resultado...</h5> 
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @if (empty($pesquisa))
            <div class="container-fluid  button-items">
                <div class="row">
                    <div class="col-8">
                        @if ($usuario->setor == 0)
                        <a href="{{ route('select') }}"><button class="btn btn-secondary btn-lg waves-effect waves-light" >Voltar</button></a>
                        @else
                        <a href="{{ route('index') }}"><button class="btn btn-secondary btn-lg waves-effect waves-light" >Voltar</button></a>
                        @endif
                        @if ($setor == 'Financeiro')
                        <a href="{{ route('result-financeiro-completo') }}"><button class="btn btn-primary btn-lg waves-effect waves-light" >Ver mais</button></a>
                        @elseif ($setor == 'Vendas')
                        <a href="{{ route('result-vendas-completo') }}"><button class="btn btn-primary btn-lg waves-effect waves-light" >Ver mais</button></a>
                        @elseif ($setor == 'Pós Vendas')
                        <a href="{{ route('result-posvendas-completo') }}"><button class="btn btn-primary btn-lg waves-effect waves-light" >Ver mais</button></a>
                        @elseif ($setor == 'Suporte')
                        <a href="{{ route('result-suporte-completo') }}"><button class="btn btn-primary btn-lg waves-effect waves-light" >Ver mais</button></a>
                        @elseif ($setor == 'Programação')
                        <a href="{{ route('result-programacao-completo') }}"><button class="btn btn-primary btn-lg waves-effect waves-light" >Ver mais</button></a>
                        @endif
                    </div>
                </div>
            </div>
        @else 
        <div class="container-fluid button-items">
            @if ($usuario->setor == 0)
            <a href="{{ route('select') }}"><button class="btn btn-info btn-lg waves-effect waves-light" >Selecionar outro setor</button></a>
            @endif
            @if ($setor == 'Financeiro')
            <a href="{{ route('result-financeiro') }}"><button class="btn btn-success btn-lg waves-effect waves-light" >Voltar para a página anterior</button></a>
            @elseif ($setor == 'Vendas')
            <a href="{{ route('result-vendas') }}"><button class="btn btn-success btn-lg waves-effect waves-light" >Voltar para a página anterior</button></a>
            @elseif ($setor == 'Pós Vendas')
            <a href="{{ route('result-posvendas') }}"><button class="btn btn-success btn-lg waves-effect waves-light" >Voltar para a página anterior</button></a>
            @elseif ($setor == 'Suporte')
            <a href="{{ route('result-suporte') }}"><button class="btn btn-success btn-lg waves-effect waves-light" >Voltar para a página anterior</button></a>
            @elseif ($setor == 'Programação')
            <a href="{{ route('result-programacao') }}"><button class="btn btn-success btn-lg waves-effect waves-light" >Voltar para a página anterior</button></a>
            @endif
        </div>
        @endif
    </div>
</div>






@foreach($relatorios as $relatorio)

<div class="col-sm-6 col-md-3 m-t-30">
    <!--  Modal content for the above example -->
    <div class="modal fade bs-example{{ $relatorio->id }}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">O QUE FOI FEITO:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p>{{ $relatorio->feito }}</p>
            
                </div>
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">O QUE NÃO FOI FEITO:</h5>
                </div>
                <div class="modal-body">
                    <p>{{ $relatorio->nfeito }}</p>
            
                </div>
                
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

@endforeach

@endsection
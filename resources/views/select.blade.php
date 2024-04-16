@extends('layout')

@section('title', 'Relatório de Produtividade')

@section('content')



<div class="wrapper pt-5 mt-4 ">
    <div class="page-title-box m-0">
        <div class="container-fluid">

            <div class="row ">
                <div class="col-sm-12">
                    
                    
                    <h4 class="page-title">Relatórios</h4>
                    

                </div>
            </div>
        </div>
        <!-- end container-fluid -->
    
    </div>

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row center">
                @if ($usuario->setor == 1 || $usuario->setor == 0)
                <div class="col-sm-2">
                    <div class="card m-b-30 card-body">
                        <h3 class="card-title font-16 mt-0">Financeiro<span class="pull-right">{{ $financeiro }}</span></h3>
                        <a href="{{ route('result-financeiro') }}" class="btn btn-primary waves-effect waves-light">Visualisar Relatório</a>                        
                    </div>
                </div>
                @endif
                @if ($usuario->setor == 2 || $usuario->setor == 0)
                <div class="col-sm-2">
                    <div class="card m-b-30 card-body">
                        <h3 class="card-title font-16 mt-0">Vendas<span class="pull-right">{{ $vendas }}</span></h3>
                        <a href="{{ route('result-vendas') }}" class="btn btn-primary waves-effect waves-light">Visualisar Relatório</a>
                    </div>
                </div>
                @endif
                @if ($usuario->setor == 3 || $usuario->setor == 0)
                <div class="col-sm-2">
                    <div class="card m-b-30 card-body">
                        <h3 class="card-title font-16 mt-0">Pós Vendas<span class="pull-right">{{ $posvendas }}</span></h3>
                        <a href="{{ route('result-posvendas') }}" class="btn btn-primary waves-effect waves-light">Visualisar Relatório</a>
                    </div>
                </div>
                @endif
                @if ($usuario->setor == 4 || $usuario->setor == 0)
                <div class="col-sm-2">
                    <div class="card m-b-30 card-body">
                        <h3 class="card-title font-16 mt-0">Suporte<span class="pull-right">{{ $suporte }}</span></h3>
                        <a href="{{ route('result-suporte') }}" class="btn btn-primary waves-effect waves-light">Visualisar Relatório</a>
                    </div>
                </div>
                @endif
                @if ($usuario->setor == 5 || $usuario->setor == 0)
                <div class="col-sm-2">
                    <div class="card m-b-30 card-body">
                        <h3 class="card-title font-16 mt-0">Programação<span class="pull-right">{{ $programacao }}</span></h3>
                        <a href="{{ route('result-programacao') }}" class="btn btn-primary waves-effect waves-light">Visualisar Relatório</a>
                    </div>
                </div>
                @endif
            </div>
            <div class="row center">
                @if (session('error') == true)
                <h3 class="text-danger">{{ session('error') }}</h3>
                @endif
            </div>
        </div>
    </div>









</div>


@endsection
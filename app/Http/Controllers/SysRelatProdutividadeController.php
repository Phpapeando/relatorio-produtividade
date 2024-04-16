<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SysRelatProdutividade;
use Carbon\Carbon;

class SysRelatProdutividadeController extends Controller
{
    public function index(){

        $usuario = auth()->user();
        
        if ($usuario->setor == 0){
            
            return redirect()->route('select');
            
        }else{

        return view('index', [
            'usuario' => $usuario
        ]);
        }

    }

    public function store(Request $request){

        $data = $request->all();

        $data['created_at'] = Carbon::now('America/Cuiaba');
        $data['updated_at'] = Carbon::now('America/Cuiaba');

        $data = SysRelatProdutividade::create($data);
        

        if($data->save()) {
            
            return redirect()->route('index')->with('success', 'Seu relátório foi enviado com sucesso!');
        } else {
            return redirect()->route('index')->with('error', 'por geltileza tente novamente...');
        }

    }

    public function select(){

        $relatorios = SysRelatProdutividade::all();

        $financeiro = SysRelatProdutividade::where('setor', 1)->count();
        $vendas = SysRelatProdutividade::where('setor', 2)->count();
        $posvendas = SysRelatProdutividade::where('setor', 3)->count();
        $suporte = SysRelatProdutividade::where('setor', 4)->count();
        $programacao = SysRelatProdutividade::where('setor', 5)->count();

        $usuario = auth()->user();

        return view('select', [
            'relatorios'=> $relatorios,
            'financeiro'=> $financeiro,
            'vendas'=> $vendas,
            'posvendas'=> $posvendas,
            'suporte'=> $suporte,
            'programacao'=> $programacao,
            'usuario' => $usuario
        ]);

    }

    public function financeiro(){

        $usuario = auth()->user();

        if($usuario->setor == 1 || $usuario->setor == 0){

        $relatorios = SysRelatProdutividade::where('setor', 1)->latest()->take(10)->get();
        
        $setor = 'Financeiro';

        return view('result', compact('relatorios', 'setor'));

        }

        else{
            return redirect()->route('select')->with('error', 'Você não tem permissão para visualizar este relatório!');
        }

    }

    public function vendas(){

        $usuario = auth()->user();

        if($usuario->setor == 2 || $usuario->setor == 0){

        $relatorios = SysRelatProdutividade::where('setor', 2)->latest()->take(10)->get();

        $setor = 'Vendas';

        return view('result', compact('relatorios', 'setor'));
        
        }

        else{
            return redirect()->route('select')->with('error', 'Você não tem permissão para visualizar este relatório!');
        }



    }

    public function posvendas(){

        $usuario = auth()->user();

        if($usuario->setor == 3 || $usuario->setor == 0){

        $relatorios = SysRelatProdutividade::where('setor', 3)->latest()->take(10)->get();

        $setor = 'Pós Vendas';

        return view('result', compact('relatorios', 'setor'));
    
        }

        else{
            return redirect()->route('select')->with('error', 'Você não tem permissão para visualizar este relatório!');
        }

    }

    public function suporte(){

        $usuario = auth()->user();

        if($usuario->setor == 4 || $usuario->setor == 0){

        $relatorios = SysRelatProdutividade::where('setor', 4)->latest()->take(10)->get();

        $setor = 'Suporte';

        return view('result', compact('relatorios', 'setor'));
        
        }

        else{
            return redirect()->route('select')->with('error', 'Você não tem permissão para visualizar este relatório!');
        }

    }

    public function programacao(){

        $usuario = auth()->user();

        if($usuario->setor == 5 || $usuario->setor == 0){

        $relatorios = SysRelatProdutividade::where('setor', 5)->latest()->take(10)->get();

        $setor = 'Programação'; 

        return view('result', compact('relatorios', 'setor'));
    
        }
        
        else{

            return redirect()->route('select')->with('error', 'Você não tem permissão para visualizar este relatório!');

        }

    }

    public function financeiro_completo(){

        $usuario = auth()->user();

        if($usuario->setor == 1 || $usuario->setor == 0){

        $relatorios = SysRelatProdutividade::where('setor', 1)->latest()->get();

        $setor = 'Financeiro';

        return view('result', compact('relatorios', 'setor'));

        } else{

            return redirect()->route('select')->with('error', 'Você não tem permissão para visualizar este relatório!');            

        }

    }

    public function vendas_completo(){

        $usuario = auth()->user();

        if($usuario->setor == 2 || $usuario->setor == 0){

        $relatorios = SysRelatProdutividade::where('setor', 2)->latest()->get();

        $setor = 'Vendas';

        return view('result', compact('relatorios', 'setor'));

        } else{

            return redirect()->route('select')->with('error', 'Você não tem permissão para visualizar este relatório!');

        }

    }

    public function posvendas_completo(){

        $usuario = auth()->user();

        if($usuario->setor == 3 || $usuario->setor == 0){

        $relatorios = SysRelatProdutividade::where('setor', 3)->latest()->get();

        $setor = 'Pós Vendas';

        return view('result', compact('relatorios', 'setor'));

        } else{

            return redirect()->route('select')->with('error', 'Você não tem permissão para visualizar este relatório!');

        }

    }

    public function suporte_completo(){

        $usuario = auth()->user();

        if($usuario->setor == 4 || $usuario->setor == 0){

        $relatorios = SysRelatProdutividade::where('setor', 4)->latest()->get();

        $setor = 'Suporte';

        return view('result', compact('relatorios', 'setor'));
    
        } else{

            return redirect()->route('select')->with('error', 'Você não tem permissão para visualizar este relatório!');

        }

    }

    public function programacao_completo(){

        $usuario = auth()->user();

        if($usuario->setor == 5 || $usuario->setor == 0){

        $relatorios = SysRelatProdutividade::where('setor', 5)->latest()->get();

        $setor = 'Programação';

        return view('result', compact('relatorios', 'setor'));

        } else{

            return redirect()->route('select')->with('error', 'Você não tem permissão para visualizar este relatório!');

        }

    }

    public function pesquisar(Request $request){
        

        $pesquisa = $request->all();

        //Todos os campos vazios

        if ($pesquisa['data_inicio'] == null && $pesquisa['data_fim'] == null && $pesquisa['produtividade'] == null) {

            if ($pesquisa['setor'] == 1){
                $setor = 'Financeiro';
                return redirect()->route('result-financeiro')->with('error', 'Pelo menos um dos campos (Data Inicio, Data Fim ou Nível de Produtividade) deve ser preenchido para fazer a busca');
            }else if ($pesquisa['setor'] == 2){
                $setor = 'Vendas';
                return redirect()->route('result-vendas')->with('error', 'Pelo menos um dos campos (Data Inicio, Data Fim ou Nível de Produtividade) deve ser preenchido para fazer a busca');
            }else if ($pesquisa['setor'] == 3){
                $setor = 'Pós Vendas';
                return redirect()->route('result-posvendas')->with('error', 'Pelo menos um dos campos (Data Inicio, Data Fim ou Nível de Produtividade) deve ser preenchido para fazer a busca');
            }else if ($pesquisa['setor'] == 4){
                $setor = 'Suporte';
                return redirect()->route('result-suporte')->with('error', 'Pelo menos um dos campos (Data Inicio, Data Fim ou Nível de Produtividade) deve ser preenchido para fazer a busca');
            }else if ($pesquisa['setor'] == 5){
                $setor = 'Programação';
                return redirect()->route('result-programacao')->with('error', 'Pelo menos um dos campos (Data Inicio, Data Fim ou Nível de Produtividade) deve ser preenchido para fazer a busca');
            }

            

            //return back()->with('error', 'Pelo menos um dos campos (Data Inicio, Data Fim ou Nível de Produtividade) deve ser preenchido para fazer a busca');

         }


        //Campo produtividade preenchido
        if ($pesquisa['produtividade'] == null){

            if ($pesquisa['data_inicio'] == null){

                $pesquisa['data_inicio'] = '01/01/2024';

            }

            if ($pesquisa['data_fim'] == null){

                $pesquisa['data_fim'] = $data_fim = Carbon::today();

                $pesquisa['data_fim'] = $data_fim->format('d/m/Y');

            }

            $data_inicio = $pesquisa['data_inicio'].' 00:00:00' ;
            $data_fim = $pesquisa['data_fim'].' 23:59:59';

            $data_inicio_formatada = Carbon::createFromFormat('d/m/Y H:i:s', $data_inicio)->format('Y-m-d H:i:s');

            $data_fim_formatada = Carbon::createFromFormat('d/m/Y H:i:s', $data_fim)->format('Y-m-d H:i:s');

            $relatorios = SysRelatProdutividade::where('setor', $pesquisa['setor'])->whereBetween('created_at', [$data_inicio_formatada, $data_fim_formatada])->get();

            if ($pesquisa['setor'] == 1){
                $setor = 'Financeiro';
            }else if ($pesquisa['setor'] == 2){
                $setor = 'Vendas';
            }else if ($pesquisa['setor'] == 3){
                $setor = 'Pós Vendas';
            }else if ($pesquisa['setor'] == 4){
                $setor = 'Suporte';
            }else if ($pesquisa['setor'] == 5){
                $setor = 'Programação';
            }
    
            $pesquisa = true;

            return view('result', compact('relatorios', 'data_inicio', 'data_fim','setor', 'pesquisa'));

        }

        //Campo produtividade preenchido vazio
        if ($pesquisa['produtividade'] != null){

            if ($pesquisa['data_inicio'] == null){

                $pesquisa['data_inicio'] = '01/01/2024';

            }

            if ($pesquisa['data_fim'] == null){

                $pesquisa['data_fim'] = $data_fim = Carbon::today();

                $pesquisa['data_fim'] = $data_fim->format('d/m/Y');

            }

            $pesquisa['data_inicio'] = '01/01/2024';

            $data_inicio = $pesquisa['data_inicio'].' 00:00:00' ;
            $data_fim = $pesquisa['data_fim'].' 23:59:59';

            $data_inicio_formatada = Carbon::createFromFormat('d/m/Y H:i:s', $data_inicio)->format('Y-m-d H:i:s');
            $data_fim_formatada = Carbon::createFromFormat('d/m/Y H:i:s', $data_fim)->format('Y-m-d H:i:s');

            $relatorios = SysRelatProdutividade::where('setor', $pesquisa['setor'])->whereBetween('created_at', [$data_inicio_formatada, $data_fim_formatada])->where('produtividade', $pesquisa['produtividade'])->get();

            if ($pesquisa['setor'] == 1){
                $setor = 'Financeiro';
            }else if ($pesquisa['setor'] == 2){
                $setor = 'Vendas';
            }else if ($pesquisa['setor'] == 3){
                $setor = 'Pós Vendas';
            }else if ($pesquisa['setor'] == 4){
                $setor = 'Suporte';
            }else if ($pesquisa['setor'] == 5){
                $setor = 'Programação';
            }
    
            //dd($pesquisa['setor']);
    
            $pesquisa = true;
    
            return view('result', compact('relatorios', 'data_inicio', 'data_fim','setor', 'pesquisa'));
            
        }

        
        return redirect()->back();
      

    }

    

    

}
<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class SysLoginController extends Controller
{
    public function index(){

        return view('login');
        
    }

    public function store(Request $request)
    {
        $data_login = $request->only('name', 'password');

        if (Auth::attempt($data_login)) {

            $usuario = auth()->user();

            Auth::logoutOtherDevices($request->password);

            if ($usuario->setor != 0) {
            
            return redirect()->route('index');

            }else{
                return redirect()->route('select');
            }
            
        }

        // Autenticação falhou
        return redirect()->route('login')->with('error', 'Credenciais inválidas. Por favor, tente novamente.');
    }

    public function destroy(){
        Auth::logout();
        return redirect()->route('login');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cadastro;
use App\Models\User;

class CadastroController extends Controller
{
   public function cadastro() {
    return view('Funcionario.cadastro');
   } 

   #Faço request do form de cadastro, boto uma varivel que recebe a model digo que a coluna name da tabela cadastro é igual ao name do request
   public function store(request $request) {

      $cadastro = new Cadastro;

      $cadastro->Name = $request->Name;

      $cadastro->save();

      return redirect('/')->with('success', 'Dados enviados com sucesso!');

   }
}

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

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;
    #public $timestamps me permite fazer insert de dados na tabela sem necessidade
    #de ter uma coluna updated_at que é padrão do laravel na migrates, mas como eu criei a tabela sem migrate tive que por isso 
   
    protected $table = 'cadastros';

    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $fillable = ['nome_cliente', 'nome_vendedor', 'dt_orcamento','hr_orcamento',  'descricao_orcamento', 'valor_orcamento'];
    protected $dates = ['dt_orcamento'];
}

